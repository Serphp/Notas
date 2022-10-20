<?php
use Serph\Notas\models\Notas;
use Serph\Notas\models\Note;

    $notes = Note::getAll();
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> VIENDO UNA NOTA </h1>
    <?php
    foreach ($notes as $note) {
        echo "<h2>{$note->getTitle}</h2>";
        echo $note->title;
        echo $note->content;
    }
    ?>
</body>
</html>