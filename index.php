<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Home</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="./res/stylenav.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    
        <?php
            include('./inc/nav.php'); 
            if(@$_SESSION['role']=='Admin')
            {
                
            }
            
        ?>
    </body>
</html>   