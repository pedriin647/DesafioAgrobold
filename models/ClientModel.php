<?php

class ClientModel extends Database{

    private $pdo;

    public $id;
    public $name;
    public $email;
    public $password;
    

    public function __construct(){
        $this->pdo = $this->getConnection();
    }

    public function fetch(){

        $stmt = $this->pdo->query("SELECT * FROM clients");
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else{
            return [];
        }

    }

    public function fetchById($id){
        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE id = ?");
        $stmt->execute([$id]);

        if($stmt->rowCount() > 0){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }else{
            return [];
        }
    }

    public function create(){
        $stmt = $this->pdo->prepare("INSERT INTO clients (nomeCliente, emailCliente, passwdCliente) VALUES (?, ?, ?)");
        $stmt->bindValue(1, $this->getName());
        $stmt->bindValue(2, $this->getEmail());
        $stmt->bindValue(3, $this->getPassword());
        $stmt->execute();
    }

    public function update(){
        $stmt = $this->pdo->prepare("UPDATE clients SET nomeCliente=?, emailCliente=?, passwdCliente=? WHERE id = ?");
        $stmt->bindValue(1, $this->getName());
        $stmt->bindValue(2, $this->getEmail());
        $stmt->bindValue(3, $this->getPassword());
        $stmt->bindValue(4, $this->getId());
        $stmt->execute();
    }

    public function destroy($id){
         $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE id = ?");
         $stmt->execute([$id]);

        if($stmt->rowCount() > 0){
            $stmt2 = $this->pdo->prepare("DELETE FROM clients WHERE id = ?");
            $stmt2->execute([$id]);      
        }
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}