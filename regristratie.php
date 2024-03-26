<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord= $_POST['wachtwoord'];

    $conn = new mysqli('localhost', 'root', 'dyslexie');
    if ($conn->connect_error){
        die('Connection Failed  : '.$con->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO regristratie(voornaam, achternaam, email, wachtwoord) VALUES(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $voornaam, $achternaam, $email, $wachtwoord);
        $stmt->execute();
        echo "Registratie gelukt!";
        $stmt->close();
        $conn->close();
    }
}
?>