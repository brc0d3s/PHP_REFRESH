<?php
$expire = time() + (60 * 60 * 24 * 30); // 30 days expiration

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['cookie-text'])) {
        $message = "Please enter your Message";
    } else {
        setcookie("test", $_POST['cookie-text'], $expire, "/");
        $message = "Cookie has been set!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Test</title>
</head>
<body>
    <h1>Cookie Test Page</h1>

    <!-- Display Messages -->
    <?php if (!empty($message)) { ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php } ?>

    <!-- Form to Submit the Cookie Text -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="text">Enter Text for Cookie:</label><br>
        <textarea name="cookie-text" id="text" rows="4" cols="50"></textarea><br>
        <button type="submit">Submit</button>
    </form>

    <!-- Display Cookie Value -->
    <?php if (isset($_COOKIE['test'])):?>
        <h2>Cookie Value:</h2>
        <p><?php echo htmlspecialchars($_COOKIE['test']); ?></p>
    <?php endif;?>
</body>
</html>
