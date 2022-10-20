<?php
    namespace Notas\views\components;

    use PDO;
    use Serph\Notas\lib\Database;
    use Serph\Notas\models\note;
    $notes = Note::getAll();
    //Connection to database
    $notes = [];
    $db = new Database();
    $query = $db->connect()->query('SELECT * FROM notas');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body>
    //GO note
    <a href="?view=view&id=<?php echo $note->getUUID(); ?>">
    <div class="note-vista"> 
        //show note
        <div class = "title"><?php echo $note->getTitle() ?></div>
    </div></a>

    //structure of the note
<?php
    foreach($note as $note){
        echo "<div>{$note->title}</div>";
    }
    
?>
</body>
</html>