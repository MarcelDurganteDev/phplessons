<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- // CREATE A SESSION for PASS and USERNAME (safer and a hacker cant see it) -->

    <!-- // $_SESSION['name'] = "12"; -->

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

    <?php

// create a SESSION VARIABLE

    $_SESSION['username'] = "dani948a";
    echo $_SESSION['username'];

    ?>



</body>

</html>