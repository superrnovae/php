<?php
    require_once("db.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <?php
            if (!empty($_GET['id'])) {
                $id = $_GET["id"];
                $stmt = $conn->prepare("select * from personne where id=?");
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $result = $stmt->get_result()->fetch_assoc();

                $nom = $result["Nom"];
                $prenom = $result["Prenom"];
                $password = $result["pwd"];
                $ddn = $result["DDN"];
            }
            else {
                die("Parameter is missing: id");
            }
        ?>

        <form action="" method="POST">
                <p>
                <label for="nom">Nom</label>
                <input type='text' name='nom' value="<?= $nom ?>">
                </p>
                <p>
                <label for="prenom">Prenom</label>
                <input type='text' name='prenom' value="<?= $prenom ?>">
                </p>
                <p>
                <label for="pwd">Mot de passe</label>
                <input type='password' name='pwd' value="<?= $password ?>">
                </p>
                <p>
                <label for="ddn">Date de naissance</label>
                <input type='date' name='ddn' value="<?= $ddn ?>">
                </p>
                <input type='hidden' name='id' value="<?= $id ?>">
                <input type="submit" value="Submit form">
            </form>
    </body>
</html>