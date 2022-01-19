<?php
    include('../inc/nav.php');
    include('/xampp/htdocs/config/dbaccess.php'); 
?>
<head>
    <title>Benutzerverwaltung</title>
    
</head>

<body>
    <table>
        <tr>
            <th>Anrede</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Email</th>
            <th>Username</th>
            <th>Rolle</th>
            <th>Status</th>
        </tr>
        <?php
            require("/xampp/htdocs/semesterprojekt22/config/dbaccess.php");
            $stmt = $mysql->prepare("SELECT anrede, usersVorname, usersNachname, usersEmail, usersRole, usersActive FROM users");
            $stmt->execute();
            while($row = $stmt->fetch())
            {
              ?>
              <td><?php echo $row["vorname"] ?></td>  
              <?php
            }
        ?>
    </table>
</body>