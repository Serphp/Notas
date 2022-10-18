<?php
    namespace Notas\views\components;

    use PDO;
    use Serph\Notas\lib\Database;
    use Serph\Notas\models\note;
    
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
    <h1> Hola </h1>
    <p> Esta es la pagina de inicio </p>

<?php
    foreach($note as $note){
        echo "<div>{$note->title}</div>";
    }
    
?>
</body>
</html>