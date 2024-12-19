<?php
$uName = $Pass = "";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get username
    if (empty($_POST['username'])) {
        echo "Username is empty!<br>";
    } else {
        $uName = $_POST['username'];
        echo "Username: " . $uName . "<br>";
    }

    // Get password
    if (empty($_POST['password'])) {
        echo "Password is empty!<br>";
    } else {
        $Pass =$_POST['password'];
        echo "Password: " . $Pass . "<br>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Login</h1>
            <p>Welcome back! Please log in to your account.</p>
        </div>
    </header>


    <!-- Login Form -->
    <main>
        <div class="form-container">
            <h2>Login to your Account</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">

                <label for="password">Password</label>
                <input type="password" id="password" name="password">

                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </main>

    <!-- Footer -->
    <?php
     require_once "footer.php"
    ?>
</body>
</html>
