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
            if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ddn'])) {
                $id = $_POST["id"];
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $ddn = $_POST["ddn"];

                $stmt = $conn->prepare("Update personne set Nom=?,Prenom=?,DDN=? Where id=?");
                $stmt->bind_param('sssi', $nom, $prenom, $ddn, $id);
                $stmt->execute();
                $stmt->close();
                $conn->close();

                header('Location: index.php');
            }
            elseif (!empty($_GET['id']) && !empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['ddn'])) {
                $id = $_GET["id"];
                $nom = $_GET["nom"];
                $prenom = $_GET["prenom"];
                $ddn = $_GET["ddn"];
            }
            else {
                die("Expected parameters were not supplied");
            }
        ?>

        <form action="" method="POST">
                <p>
                <label for="nom">Nom</label>
                
                <?php
                    echo "<input type='text' name='nom' value=$nom>";
                ?>
                </p>
                <p>
                <label for="prenom">Prenom</label>
                <?php
                    echo "<input type='text' name='prenom' value=$prenom>";
                ?>
                </p>
                <p>
                <label for="ddn">Date de naissance</label>
                <?php
                    echo "<input type='text' name='ddn' value=$ddn>";
                ?>
                </p>
                <?php
                    echo "<input type='hidden' name='id' value='$id'>";
                ?>
                <input type="submit" value="Submit form">
            </form>
    </body>
</html>