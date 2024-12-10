<!DOCTYPE html>
<html lang="en">

<head></head>
<title>Lab 5a Q3</title>
</head>

<body>
    <?php

    function calculateArea($width, $length)
    {
        $area = $width * $length;
        return $area;
    }

    ?>
    <p><?php echo ("The area of a rectangle with a width of 4 and 2 is ". calculateArea(4, 2)); ?></p>
</body>

</html>