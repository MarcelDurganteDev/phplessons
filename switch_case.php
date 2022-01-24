<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/CSS/main.css">
</head>

<body>

    <?php

    $dayOfWeek = date("w");


    switch ($dayOfWeek) {
        case 1:
            echo "<p>it is Mon</p>";
            break;
        case 2:
            echo "<p>it is Tue</p>";
            break;
        case 3:
            echo "<p>it is Wed</p>";
            break;
        case 4:
            echo "<p>it is Tru</p>";
            break;
        case 5:
            echo "<p>it is Fri</p>";
            break;
        case 6:
            echo "<p>it is Sat</p>";
            break;
        case 0:
            echo "<p>it is Sun</p>";
            break;
        default:
            echo "<p>it is Holidays</p>";
    }

    ?>


</body>

</html>