<?php
declare(strict_types=1);

include "includes/class.autoload.inc.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form action="includes/calc.inc.php" method="POST">
            <p>My own calculator!!!</p>
            <input type="number" name ="num1" placeholder="First number">
            <select name="oper" id="">
                <option value="add">Addition<option>
                <option value="sub">Subtraction<option>
                <option value="mul">Multiplication<option>
                <option value="div">Division<option>
            </select>
            <input type="number" name="num2" placeholder="Second number">
            <button type="submit" name="submit">Submit</button>
        </form>
    
</body>
</html>