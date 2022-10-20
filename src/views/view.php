<?php

use Serph\Notas\models\Note;
if(isset($_GET['id'])){
    $note = Note::getById($_GET['id']);
    if($note == null){
        header('Location: http://localhost:8000/notas?view=home');
    }
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
    //show note 
    <form action="#" method="POST">
        <input type="text" name="title" placeholder="Title" value="<?php echo $note->getTitle();">
        <textarea name="content" id="" cols="30" rows="10" placeholder="Content"></textarea>
        

</body>
</html>