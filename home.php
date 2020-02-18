<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
</head>
<body>
    <form action='signin.php' method='POST' autocomplete="off">
        <label> id: <input type='text' name='id'/> <br/> </label>
        <input type='submit' value='submit'/>
    </form>
    <?php
    require "mysql_login.php";
    echo "hello";
    ?>
</body>
</html>