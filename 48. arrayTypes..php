<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>48. Array Types</title>
</head>
<body>
    <h1 style="text-align:center;">ARRAYS</h1>
    
    <?php
        #indexed array. multiple single values saved in a single variable
        $bintu = array(
                         "rizqah",
                         "madinah",
                         "fatihah",
                         "qudrah",
                         "'alimah",
                         "ummu-l-khair",
                         "hikmah"
                       );

        echo "<h3 style=' color:blue;'>This here is the output of a plain Indexed Array, Bintu Array:</h3>".$bintu[5]."<br><br>";

        #associative array. have keys that have value which can then be used to indentify the data in an array rather than the default index numbers from zero to the number of data in the array one less
        $gulaam = array(
                         "1st" => "abdu-l-qoyyuum",
                         "2nd" => "abdullah",
                         "3rd" => "abdu-l-basit",
                         "4th" => "jamiu",
                         "5th" => "musa",
                         "6th" => "abdu-s-samad",
                         "7th" => "farouq",
                         "8th" => "fawas"
                       );

        echo "<h3 style=' color:blue;'>This here is the output of an Associative Array, Gulaam Array:</h3>".$gulaam["5th"]."<br>";

        #how to insert into an associative array...
        $gulaam["9th"] = "waris"; echo "<br>".$gulaam["9th"]."<br>";

        #multidimentional array, aka array of arrays, may also contain other singular data
        $madrasah = array(
                           array(
                                    "salma", 
                                    "aa'ishah"
                                ),
                           "'aliyah",
                           "amotullah"
                        );
        #outputing from the array in another array
        echo "<h3 style=' color:blue;'>This here is the output of an Array inside another array, Madrasah Array:</h3>".$madrasah[0][0]."<br>";

        #note to self: use 'foreach' loop to print out all the data in an array, try for multidimentional array as well.

        echo "<h2 style='color:rgb(255, 115, 0);'>Printing out contents of Arrays</h2>";
        echo "<h3 style='color:rgb(255, 139, 159);'>Printing out contents of Bintu Array</h3>";
        foreach ($bintu as $toolibah) 
        {
            echo $toolibah."<br>"."<br>";
        }

        echo "<h3 style='color:rgb(0, 102, 161);'>Printing out contents of Gulaam Array</h3>";
        foreach ($gulaam as $toolib) 
        {
            echo $toolib."<br>"."<br>";   
        }
        
        echo "<h3 style='color:green;'>Printing out contents of Madrasah Array</h3>";
        foreach ($madrasah as $toolibah) 
        {
            echo $toolibah."<br>"."<br>";  
        }
        echo "<h3 style='color:limegreen;'>Printing out contents of the Array inside Madrasah Array</h3>";
        foreach ($madrasah[0] as $toolibah) 
        {
            echo $toolibah."<br>"."<br>";  
        }
    ?>

</body>
</html>