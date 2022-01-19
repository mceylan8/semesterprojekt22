<?php
    include('../inc/nav.php');
    include('/xampp/htdocs/config/dbaccess.php'); 
?>
<head>
    <title>Benutzerverwaltung</title>
    
</head>

<body>
    <?php
        $sql = "SELECT * from users;";
        $results = mysqli_query($con,$sql);
        $resultCheck = mysqli_num_rows($results);

        if($resultCheck > 0)
        {
            while($row = mysqli_fetch_assoc($results))
            {
                echo $row['anrede'] . $row['usersVorname'] . $row['usersNachname'] . $row['usersEmail'] . $row['usersUID'] . $row['usersRole'] . $row['usersActive'] . "<br>";
            }
        }
    ?>


</body>