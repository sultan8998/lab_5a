<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 20;
        $width = 3;
        $area = calculateArea($length, $width);
    ?>

    <p>Length: <?php echo $length; ?> units</p>
    <p>Width: <?php echo $width; ?> units</p>
    <p>Area: <?php echo $area; ?> square units</p>
</body>
</html>
