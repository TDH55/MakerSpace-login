<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <?php
    session_start();
    ?>
</head>
<body>
    <form action='signin.php' method='POST' autocomplete="off">
        <label> id: <input type='text' name='id' autofocus="autofocus"/> <br/> </label>
        <input type='submit' value='submit'/>
    </form>
    <?php
    if($_SESSION['error']){
        echo "The last user was not signed in";
    }
    ?>
</body>
</html>
