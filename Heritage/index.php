<?php
    require_once 'heritage/animal.php';
    require_once 'heritage/chat.php';
    require_once 'heritage/humain.php';
    require_once 'heritage/chien.php';
?>

<html>
<head>
    <title>Test</title>
    <meta charset="utf8" />
</head>

<body>
    <?php
        $chien = new Chien();
        echo '<br>' . $chien->identifier();

        $humain = new Humain();
        echo '<br>' . $humain->donnerFriandise($chien);

        $chat = new Chat();

        echo '<br>';
        var_dump($chat instanceof Chat);
        echo '<br>';
        var_dump($chat instanceof Animal);
    ?>
</body>
</html>
