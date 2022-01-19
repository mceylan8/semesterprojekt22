<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Registrierung</title>
      <link rel="stylesheet" href="/res/stylelogin.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            include('../inc/nav.php'); 
        ?>
        <div class="login">
        <div class="login-header">
            <h1>Registrierung</h1>
        </div>
        <div class="login-form">
            <form action="/inc/res.inc.php" method="POST">
                <br>
                <label for="anrede" class="loginlabel">Anrede</label>
                <br>
                <select name="anrede" size="3" required>
                    <option>Herr</option>
                    <option>Frau</option>
                    <option>Divers</option>
                </select>  
                <br>
                <label for="vorname" class="loginlabel">Vorname</label>
                <input type="text" name="vorname" placeholder="Vorname" required/>
                <br>
                <label for="nachname" class="loginlabel">Nachname</label>
                <input type="text" name="nachname" placeholder="Nachname" required/>
                <br>
                <label for="mail" class="loginlabel">E-Mail-Adresse</label>
                <input type="email" name="mail" placeholder="E-Mail-Adresse" required>
                <br>
                <label for="username" class="loginlabel">Benutzername</label>
                <input type="text" name="username" placeholder="Benutzername" required>
                <br>
                <label for="passwort" class="loginlabel">Passwort</label>
                <input type="password" name="passwort" placeholder="Passwort" required>
                <br>
                <label for="rolle" class="loginlabel">Rolle</label>
                <br>
                <select name="rolle" size="3" required>
                    <option>Admin</option>
                    <option>Servicetechniker</option>
                    <option>Gast</option>
                </select> 
                 
                <br>
                <br>  
                <button type="submit" name="submit">Registrieren</button>
            </form>    
        </div>   
    </body>
</html>    