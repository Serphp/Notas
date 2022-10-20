<?php
use Serph\Notas\models\Note;

if(count($_POST) > 0){
    $title = isset($_POST['title']) ?? '';
    $content = isset($_POST['content']) ?? '';

    //$note = new Note($_POST['title'], $_POST['content']);
    $note = new Note($title, $content);
    $note->save();
    //header('Location: /');
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PAGE</title>
</head>
<body>
    
    <h1>CREATE PAGE</h1>
    <form action="/create" method="POST">
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" id="" cols="30" rows="10" placeholder="Content"></textarea>
        <button type="submit">Save</button>

</body>
</html>