<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php</title>
</head>
<body>
    <?php include "../includes/header.html" ;?>
    <main>
        <form action="../assets/php/t-f.php" method = "POST">
            <div>
                <label for="name">Name :</label>
                <input type="text" id="name" name="Name">
            </div>
            <div>
                <label for="age">Age :</label>
                <input type="text" id="age" name="Age">
            </div>
            <div>
                <label for="city">Ville :</label>
                <input type="city" id="city" name="Ville">
            </div>
            <div>
                <input type="submit" value="envoyer">
            </div>
        </form>
    </main>
    <?php include "../includes/footer.html" ;?>
    <?php include "../assets/php/t-f.php" ;?>
</body>
</html>
<?php
?>
