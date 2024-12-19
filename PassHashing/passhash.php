<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '9vg2020#', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$email = $password = $emailErr = $passErr = $passhash = $successMsg= '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate email
    if (empty(trim($_POST['email']))) {
        $emailErr = 'Email is required.';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
    } else {
        $email = trim($_POST['email']);
    }

    // Validate password
    if (empty(trim($_POST['password']))) {
        $passErr = "Password is required.";
    } else {
        $password = trim($_POST['password']);
        $passhash = password_hash($password, PASSWORD_DEFAULT);
    }

    // Insert data if no errors
    if (empty($emailErr) && empty($passErr)) {
        try {
            $stm = $pdo->prepare('INSERT INTO hashing (email, pass) VALUES (?, ?)');
            $stm->bindValue(1, $email);
            $stm->bindValue(2, $passhash);
            $stm->execute();
            $successMsg = "Data successfully saved!";
        } catch (PDOException $e) {
            $successMsg = "Error saving data: " . $e->getMessage();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Form</title>
    <style>
        .err { color: red; font-size: 0.9em; }
        .success { color: green; font-size: 1em; }
    </style>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <span class="err"><?php echo htmlspecialchars($emailErr); ?></span>
        <br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <span class="err"><?php echo htmlspecialchars($passErr); ?></span>
        <br>

        <button type="submit">Submit</button>
    </form>

    <?php if (!empty($successMsg)): ?>
        <p class="success"><?php echo htmlspecialchars($successMsg); ?></p>
    <?php endif; ?>
</body>
</html>
