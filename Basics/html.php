<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $names = ["Brian","Nashon","Kevin","David","Tevin","Erick"];
    ?>

    <h1>Names:</h1>
    <ul>
        <?php foreach($names as $name): ?>
            <li><?php echo $name; ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>