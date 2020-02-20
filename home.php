<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <?php
    session_start();
    $_SESSION['email_file'] = false;
    if(date('his') == 175359){
        //$_SESSION['email_file'] = true;
        header('Location: download.php');
        exit;
    }
    ?>
</head>


<body <?php if($_SESSION['error']) {echo('style="background:red"'); } ?>>
    <form action='signin.php' method='POST' autocomplete="off">
        <label> id: <input type='text' name='id' autofocus="autofocus"/> <br/> </label> <br/>
        <input type='submit' value='submit'/>
    </form>
    <br/>
    <form action='download.php' method='POST'>
        <input type='submit' value='email table'/>
        <input type='hidden' name='email' value='true'/>
    </form>
    <form action='download.php' mehtod='POST'>
        <input type='submit' value='download table'/>
        <input type='hidden' name='email' value='true'/>
    </form>
    <?php
    if($_SESSION['error']){
        echo "The last user was not signed in";
    }
    $_SESSION['error'] = false;
    ?>
</body>
</html>
