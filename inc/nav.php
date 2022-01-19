<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/res/stylenav.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <nav>
         <div class="logo">
            BLACKBELT HOTELS
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active" href="/semesterprojekt22/index.php">Home</a></li>
            <?php
               if(!isset($_SESSION['users']))
               {
            ?>
                     <li><a href="/pages/login.php">Login</a></li>
            <?php                   
               }
               else
               {
            ?>
                  <li><a href="../inc/logout.php">Logout</a></li>
            <?php
               }
            ?>
            
            <?php
               if(@$_SESSION['role']=="Admin")
               {
                  ?>
                  <li><a href="/pages/registrierung.php">Registrierung</a></li> 
                  <li><a href="/pages/usercontrol.php">Benutzerverwaltung</a></li> 
                  <?php                   
               }
            ?>
            <?php
               if(@$_SESSION['role']=="Gast")
               {
                  ?>
                  <li><a href="/pages/meinetickets.php">Meine Tickets</a></li>
                  <li><a href="/pages/profile.php">Mein Profil</a></li> 
                  <?php                   
               }
            ?>
            <?php
               if(@$_SESSION['role']=="Servicetechniker")
               {
                  ?>
                  <li><a href="/pages/tickets.php">Tickets</a></li> 
                  <?php                   
               }
            ?>
            
            <li><a href="/pages/impressum.php">Impressum</a></li>
            <li><a href="/pages/hilfe.php">Hilfe</a></li>
            
         </ul>
      </nav>
   </body>
</html>