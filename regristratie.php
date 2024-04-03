<!DOCTYPE html>
<html lang="en">
<head>
    <title>Informatie Pagina</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="registratie.css">
</head>
<body>
<br><br>
<div class="banner">
    <nav>
        <ul>
            <li><a href="homepagina.html">Home</a></li>
            <li><a href="informatie.html">Informatie</a></li>
            <li><a href="registratie.html">Vragenlijst</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</div>

<h1 class="Inloggen">Inloggen</h1>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $wachtwoord = $_POST['wachtwoord'];

        $conn = new mysqli('localhost', 'root', '', 'dyslexie');
        if ($conn->connect_error){
            die('Connection Failed  : '.$con->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO regristratie(voornaam, achternaam, email, wachtwoord) VALUES(?, ?, ?, ?)");
            $stmt->bind_param("ssss", $voornaam, $achternaam, $email, $wachtwoord);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }

        echo "<p>Voornaam: $voornaam</p>";
        echo "<p>Achternaam: $achternaam</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Wachtwoord: " . str_repeat('*', strlen($wachtwoord)) . "</p>";
        echo "<br>";
        echo "Een ogenblik geduld... U wordt doorgestuurd naar de vragenlijst.";
    }
    ?>
</div>

<script>
    setTimeout(function() {
        window.location.href = 'vragenlijst.html';
    }, 4000); 
</script>

</body>
</html>
