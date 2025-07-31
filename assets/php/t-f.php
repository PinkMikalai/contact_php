<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"] ?? '';
    $age = $_POST["age"] ?? '';
    $city = $_POST["city"] ?? '';

    if (!empty($nom) && !empty($age) && !empty($city)){
      $newUser = [
        "nom" => $nom,
        "age" => $age,
        "city" => $city
      ];

      $_SESSION['user'] = $newUser;
      var_dump($newUser);
    }
};
?>