<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, intall-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge,chrome">
<title>login</title>
</head>
<body>
    <form action="login.php" metohod="post">
    <input type="text" name="login" />
    <br/>
    <input type="password" name="password" />
    <br/>
    <button type="submit">zaloguj się</button>
    </form>
</body>
</html>