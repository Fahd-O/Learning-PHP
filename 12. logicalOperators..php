<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
<?php

//logical operations 

$x = 10;
$y = 20;

if ($x == $y or $x < $y)
{
    echo "x is either equal to y or x is lesser than y <br><br>";
}

if ($x < $y || $x > $y) //another way to use "or"
{
    echo "x is either greater than y or x is lesser than y <br><br>";
}

if ($x == $y and $x < $y)//another way to use "and" is by using "&&"
{
    echo "x is either equal to y or x is lesser than y";
}
else
{
    echo "both conditions have to be met in this case !<br><br>";
}

//xor: only one of the conditions and one only have to be true may also by rep by 

if (2<3 xor 1<1)
{
    echo "Subhaana llah, rabbi-l-'aalamin";
}

?>
    </h1>
</body>
</html>