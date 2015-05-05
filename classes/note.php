<?php

/**
 * Note Class
 *
 * @author rattanak
 */

class Note {
    protected $title;
    protected $content;
    protected $category;
    protected $created_at;
    protected $pdo;

    public function __construct() {
        $path = $_SERVER['DOCUMENT_ROOT'] .  '/';
        try {
            $this->pdo = new PDO("sqlite:" . $path . "data/data.sqlite3");
            //$pdo = new PDO("sqlite:". $database);
        } catch (PDOException $e) {
            exit($e->errorInfo);
        }
    }
    
    public function getAllNotes(){
        $query = $this->pdo->prepare("SELECT * FROM notes");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
     public function getNote($id){
        $query = $this->pdo->prepare("SELECT * FROM notes WHERE id = ?");
        $query->bindValue(1, $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNote($data) {
        //process json decoded data
        $title = $data['title'];
        $content = $data['content'];
        $category = $data['category'];
        
        $query = $this->pdo->prepare("INSERT INTO notes (title, content, category) VALUES (?, ?, ?)");
        $query->bindValue(1, $title);
        $query->bindValue(2, $content);
        $query->bindValue(3, $category);
        $query->execute();  //return a boolean, true on success
         return $query->rowCount();
    }
    
     public function updateNote($data) {
        //process json decoded data
        $title = $data['title'];
        $content = $data['content'];
        $category = $data['category'];
        $id = $data['id'];
        
        $query = $this->pdo->prepare("UPDATE notes SET title = ?, content = ?, category = ? WHERE id = ?");
        $query->bindValue(1, $title);
        $query->bindValue(2, $content);
        $query->bindValue(3, $category);
        $query->bindValue(4, $id);
        $query->execute();  //return a boolean, true on success
         return $query->rowCount();
    }

    public function deleteNote($id) {
        $query = $this->pdo->prepare("DELETE FROM notes WHERE id = ?");
        $query->bindValue(1, $id);
        $query->execute();
        //return 1 if successfully deleted, else 0
        return $query->rowCount();
    }

}
