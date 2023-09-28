<?php
include "includes/class.autoload.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
        <form action="insert.php" method="POST">
            <label for="">UserId</label>
            <input type="text" name="users_id"><br>
            <label for="">FirstName</label>
            <input type="text" name="users_firstname"><br>
            <label for="">LastName</label>
            <input type="text" name="users_lastname"><br>
            <label for="">DateofBirth</label>
            <input type="text" name="datebirth"><br>
            <button type="submit">submit</button>

        </form>
        <p>Display User!!</p>
        <form action="display.php" method="POST">
            <label for>FirstName</label>
            <input type="text" name="firstname">
            <button type="submit">submit</button>
        </form>

<?php




?>
    
</body>
</html>