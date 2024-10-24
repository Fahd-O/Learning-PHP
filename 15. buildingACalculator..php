<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building A Calculator</title>
</head>
<body>
    
    <form>

        <input type="text" name="numb1" placeholder="NUMBER 1">
        <input type="text" name="numb2" placeholder="NUMBER 2">

        <select name="operation">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit" >Calculate</button>

    </form>

    <p>The Answer is: </p>

    <?php

        if(isset($_GET["submit"]))
        {
            $input1 = $_GET["numb1"];
            $input2 = $_GET["numb2"];
            $operating = $_GET["operation"];

            switch($operating)
            {
                case "None":
                    echo "OPERATION ERROR! No Operation Selected...";
                break;

                case "Add":
                    echo $input1 + $input2;
                break;

                case "Subtract":
                    echo $input1 - $input2;
                break;

                case "Multiply":
                    echo $input1 * $input2;
                break;

                case "Divide":
                    echo $input1 / $input2;
                break;
            }
            
        }

    ?>

</body>
</html>