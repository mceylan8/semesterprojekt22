<?php
    include('../inc/nav.php');
    include('/xampp/htdocs/config/dbaccess.php'); 

?>

<link rel="stylesheet" href="/res/styleprofil.css">

<h1>Meine Daten</h1>

<?php
$username = $_SESSION['users']; 
$sql = "SELECT anrede, usersVorname, usersNachname, usersEmail, usersUID FROM users WHERE usersUID = '$username';"; 
$results = mysqli_query($con,$sql);
//Speichert Ergebnisse in der Variable finalresults
$finalresults = $results->fetch_array();

//print_r($finalresults);



?>

<h2>Anrede</h2>
<?php
    $sql = "SELECT anrede from users WHERE usersUID = '$username';";
    $results = mysqli_query($con,$sql);
    //Speichert Ergebnisse in der Variable finalresults
    $finalresults = $results->fetch_array();
    print_r($finalresults);
?>
<h2>Vorname</h2>
<h2>Nachname</h2>
<h2>Email</h2>
<h2>Benutzername</h2>







