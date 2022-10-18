<?php

namespace Serph\Notas\models;

use PDO;
use Serph\Notas\lib\Database;

class Note extends Database{
    private string $uuid; //llamo uuid de la clase Database
    public function __construct(private string $title, private string $content)
    {//llama constructor padre
        parent::__construct();
        $this->uuid = uniqid();
    }

    public function save(){ //guarda en mi base datos
        $query = $this->connect()->prepare('INSERT INTO notes (uuid, title, content) VALUES (:uuid, :title, :content, NOW())');
        $query->execute(['
        uuid' => $this->uuid, 
        'title' => $this->title, 
        'content' => $this->content]);
    }

    public function update(){ //actualiza mi base de datos
        $query = $this->connect()->prepare('UPDATE notes SET title = :title, content = :content WHERE uuid = :uuid');
        $query->execute(['
        uuid' => $this->uuid, 
        'title' => $this->title, 
        'content' => $this->content]);
    }   

    public static function get($uuid){
        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM notes WHERE uuid = :uuid');
        $query->execute(['uuid' => $uuid]);

        $note = note::createFromArray($query->fetch(PDO::FETCH_ASSOC));
        return $note;
    }

    public static function createFromArray($array):Note{
        $note = new Note($array['title'], $array['content']);
        $note->uuid = $array['uuid'];
        return $note;
    }

    public function getUUID(){
        return $this->uuid;
    }
    public function setUUID($value){
        $this->uuid = $value;
    }
    public function setTitle($value){
        $this->title = $value;
    }
    public function getContent(): string{
        return $this->content;
    }
    public function setContent($value){
        $this->content = $value;
    }

}
?>