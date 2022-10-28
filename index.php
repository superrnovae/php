<?php
    require_once("db.php");
?>

<html>
<head>
    <title>Test</title>
    <meta charset="utf8" />
</head>

<body>
    <table border="1" width="90%">
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>DDN</th>
            <th>Supprimer</th>
            <th>Mettre à jour</th>
        </tr>
            <?php
                
                $sql = "select id,DDN,Nom,Prenom from personne order by id";
                $result = mysqli_query($conn,  $sql);
                
                while ($row = mysqli_fetch_assoc($result))
                {
                    $id = $row["id"];
                    $ddn = $row["DDN"];
                    $prenom = $row["Prenom"];
                    $nom = $row["Nom"];

                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nom</td>";
                    echo "<td>$prenom</td>";
                    echo "<td>$ddn</td>";
                    echo "<td align='center'><a href='delete_user.php?id=$id'>X</a></td>";
                    echo "<td align='center'><a href='modify_user.php?id=$id'>U</a></td>";
                    echo "</tr>";
                }
                $conn->close();
                ?>
        </table>
        <br/>
        <form action="add_user.php" method="POST">
            <p>
            <label for="login">Login</label>
            <input type="text" name="login">
            </p>
            <p>
            <label for="pwd">Password</label>
            <input type="password" name="pwd">
            </p>
            <p>
            <label for="nom">Nom</label>
            <input type="text" name="nom">
            </p>
            <p>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom">
            </p>
            <p>
            <label for="ddn">Date de naissance</label>
            <input type="date" name="ddn">
            </p>
            <input type="submit" value="Submit form">
        </form>
</body>
</html>
