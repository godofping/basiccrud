<?php

class User {

    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function fetch($data)
    {
        $stm = $this->pdo->prepare('SELECT * FROM users WHERE userid = :userid');
        $stm->bindValue(':userid', $data['userid']);
        $success = $stm->execute();
        $rows = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $rows: [];
    }

    public function fetchAll()
    {
        $stm = $this->pdo->prepare("SELECT * FROM users");
        $success = $stm->execute();
        $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $rows: [];
    }


    public function create($data) 
    {
        $sql = "INSERT INTO users VALUES (NULL, :username, :password, :userlevel)";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':username', $data['username']); 
        $stm->bindValue(':password', $data['password']); 
        $stm->bindValue(':userlevel', $data['userlevel']);  
        $status = $stm->execute();
        return ($status) ? $this->pdo->lastInsertId() : 0;
    }

    public function update($data)
    {
        $stm = $this->pdo->prepare('update users set username = :username, password = :password, userlevel = :userlevel where userid = :userid');
        $stm->bindValue(':userid', $data['userid']);
        $stm->bindValue(':username', $data['username']); 
        $stm->bindValue(':password', $data['password']); 
        $stm->bindValue(':userlevel', $data['userlevel']);  
        $status = $stm->execute();
        return $status;
    }

    public function delete($data)
    {
        $stm = $this->pdo->prepare('delete from users where userid = :userid');
        $stm->bindValue(':userid', $data['userid']);
        $status = $stm->execute();
        return $status;
    }
}