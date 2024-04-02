<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $dbname = "dyslexie_uitslag";
    $password = "root"; 

    try {
 
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $password);

      
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $stmt = $conn->prepare("INSERT INTO form_responses (vraag1, vraag2, vraag3, vraag4, vraag5, vraag6, vraag7, vraag8, vraag9, vraag10, dyslexia_result)
            VALUES (:vraag1, :vraag2, :vraag3, :vraag4, :vraag5, :vraag6, :vraag7, :vraag8, :vraag9, :vraag10, :dyslexia_result)");

       
        $stmt->bindParam(':vraag1', $_POST['vraag1']);
        $stmt->bindParam(':vraag2', $_POST['vraag2']);
        $stmt->bindParam(':vraag3', $_POST['vraag3']);
        $stmt->bindParam(':vraag4', $_POST['vraag4']);
        $stmt->bindParam(':vraag5', $_POST['vraag5']);
        $stmt->bindParam(':vraag6', $_POST['vraag6']);
        $stmt->bindParam(':vraag7', $_POST['vraag7']);
        $stmt->bindParam(':vraag8', $_POST['vraag8']);
        $stmt->bindParam(':vraag9', $_POST['vraag9']);
        $stmt->bindParam(':vraag10', $_POST['vraag10']);

        $ja_count = 0;
        for ($i = 1; $i <= 10; $i++) {
            if ($_POST["vraag$i"] == "slecht") {
                $ja_count++;
            }
        }
        $dyslexia_result = ($ja_count >= 6) ? 'yes' : 'no';
        $stmt->bindParam(':dyslexia_result', $dyslexia_result);

    
        $stmt->execute();

        $message = ($dyslexia_result == 'yes') ? "Gebasseerd op je antwoorden heeft u waarschijnlijk dyslexie, raadpleeg een specialist voor verdere evaluatie." : "Gebasseerd op je antwoorden heeft u hoogstwaarschijnlijk geen dyslexie";
    } catch(PDOException $e) {
        $message = "Error: " . $e->getMessage();
    }
?>

<h1>Dyslexie Uitslag</h1>
<p><?php echo $message; ?></p>
<a href="homepagina.html">Terug naar homepagina</a>

<?php } else { ?>
    <p>No data submitted.</p>
<?php } ?>
</body>
</html>
