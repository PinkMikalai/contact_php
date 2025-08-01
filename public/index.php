<?php
session_start();

$newUser = []; // Initialisation pour éviter erreur si formulaire vide
$erreurs = [];

if (!isset($_SESSION["users"])) {
       $_SESSION["users"] = [];
    }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"] )?? '';
    $age = htmlspecialchars($_POST["age"]) ?? '';
    $city = htmlspecialchars($_POST["city"])?? '';

    if (!empty($nom) && !empty($age) && !empty($city)) {
        $newUser[] = [
            "nom" => $nom,
            "age" => $age,
            "city" => $city
        ];
    }
    if (empty($nom)){
        $erreurs[] = "ta pas ton nom";
        var_dump($erreurs);
    }
    if (empty($age)){
        $erreurs[] = "ta pas ton age";
        var_dump($erreurs);
    }
    if (empty($city)){
        $erreurs[] = "ta pas ta ville";
        var_dump($erreurs);
    }
    $_SESSION['user'][] = $newUser;
    $users = $_SESSION['user'];
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
        <section>
            <h2>Ici mon message recuee</h2>
            <article>
                <?php 
                    if(!empty($newUser)) {
                        foreach ($users as $user) {
                            echo "
                            <article>
                                <h3>$user[nom]</h3>
                                <span>l'age est: $user[age]</span>
                                <p>
                                    $user[city]
                                </p>
                            </article>
                            ";
                        }
                        
                    }else{
                        echo "
                            <p>
                                Nous n'avons pas reçu de messages!
                            </p>
                        ";
                    }
                ?>
            </article>
        </section>
    </main>
    <?php include "../includes/footer.html"; ?>
</body>
</html>
