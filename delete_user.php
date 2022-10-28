<?php
    require_once("db.php");

    if (empty($_GET['id'])) {
        die("Parameter is missing: id");
    }

    $id=$_GET["id"];

    $stmt = $conn -> prepare("Delete from personne where id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header('Location: index.php');
    


