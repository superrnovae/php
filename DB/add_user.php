<?php
    require_once("db.php");

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ddn = $_POST["ddn"];
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];

    $stmt = $conn -> prepare("INSERT INTO personne (login,pwd,nom,prenom,ddn) values(?,?,?,?,?)");
    $stmt->bind_param('sssss', $login, $pwd, $nom, $prenom, $ddn);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header('Location: index.php');
