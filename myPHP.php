<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP File</title>
</head>
<body>
    
    <h1> Task 1 - Just Echoing!!!</h1>
    <?php 
    echo "Hello World!";
     ?>

    <h1> Task 2 - Echo Through Variable "greetings"</h1>
    <?php 
    $greetings = "Hello World!!";
    echo $greetings;
    ?>

    <h1> Task 3 - Using Operators</h1>
    <h2> x = 6, y = 5</h2>
    <?php 
    $x = 6;
    $y = 5;
    $z = $x + $y;
    echo "sum = ". $z;
    echo "<br>";
    $z = $x - $y;
    echo "difference = ". $z;
    echo "<br>";
    $z = $x * $y;
    echo "product = " . $z;
   echo "<br>";
   $z = $x / $y;
    echo "div = " . $z;
    ?>

    
</body>
</html>