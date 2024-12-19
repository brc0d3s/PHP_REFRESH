<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <h1>Welcome to Our Website</h1>
            <p>Your one-stop destination for everything you need</p>
        </div>
    </header>

    <!-- Navigation Menu -->
    <?php
     require_once 'navBar.php'
    ?>

    <!-- Main Content -->
    <main>
        <div class="content-container">
            <h2>About Us</h2>
            <p>
                We are a platform dedicated to offering the best services for our customers.
                Explore our website to learn more about what we offer!
            </p>
        </div>
    </main>

    <!-- Footer -->
    <?php
     require_once "footer.php"
    ?>
</body>
</html>
