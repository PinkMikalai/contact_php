<?php
session_start();

$newUser = null; // Initialisation pour éviter erreur si formulaire vide
$erreurs [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"] ?? '';
    $age = $_POST["age"] ?? '';
    $city = $_POST["city"] ?? '';

    if (!empty($nom) && !empty($age) && !empty($city)) {
        $newUser = [
            "nom" => $nom,
            "age" => $age,
            "city" => $city
        ];
        $_SESSION['user'] = $newUser; // on fait une session user
        var_dump($newUser); // affichage test
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index php</title>
</head>
<body>
    <?php include "../includes/header.html"; ?>
    
    <main>
        <form action="" method="POST">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="nom">
            </div>
            <div>
                <label for="age">Âge :</label>
                <input type="number" id="age" name="age">
            </div>
            <div>
                <label for="city">Ville :</label>
                <input type="text" id="city" name="city">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </main>

    <?php include "../includes/footer.html"; ?>
</body>
</html>
