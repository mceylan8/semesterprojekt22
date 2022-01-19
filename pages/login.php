<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="/res/stylelogin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include('/xampp/htdocs/inc/nav.php'); 
        ?>
        <div class="login">
        <div class="login-header">
            <h1>Login</h1>
        </div>
        <div class="login-form">
            <form action="../inc/login.inc.php" method="POST">
                <label for="username" class="loginlabel">Benutzname</label>
                <input type="text" name="username" placeholder="Username"/><br>
                <label for="password" class="loginlabel">Passwort</label>
                <input type="password" name="password" placeholder="Password"/>
                <br>
                <button type="submit" name="submit">Login</button>
            </form>    
        </div>    

    </body>
</html>    