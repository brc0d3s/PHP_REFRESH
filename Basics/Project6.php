<?php
  $name = $email = $pass = $conPass = "";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        echo"Username empty";
    }else{
        $name = $_POST['name'];
        echo "Username: ".$name.PHP_EOL;
    }

    if(empty($_POST['email'])){
        echo"Email empty";
    }else{
        $email = $_POST['email'];
        echo "Email: ".$email.PHP_EOL;
    }

    if(empty($_POST['password']) && empty($_POST['confirm-password'])){
        echo"Password empty";
    }else{
        if($_POST['password'] == $_POST['confirm-password']){
            $pass = $_POST['password'];
            echo "Password: ".$pass.PHP_EOL;


            
            $file = fopen("register.json","w");

            $data = [
                "name"=> $name,
                "email"=> $email,
                "password" => $pass,
                "time" => date("Y-m-d H:i:s")
            ];

            fwrite($file, json_encode($data));

            fclose($file);
        }else{
            echo "Passwords do not match";
        }
    }


  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="./forms/style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Register</h1>
            <p>Join us today by creating an account.</p>
        </div>
    </header>


    <!-- Register Form -->
    <main>
        <div class="form-container">
            <h2>Create a New Account</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" >

                <label for="password">Password</label>
                <input type="password" id="password" name="password" >

                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password">

                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </main>

    <!-- Footer -->
    <?php
     require_once "footer.php"
    ?>
</body>
</html>
