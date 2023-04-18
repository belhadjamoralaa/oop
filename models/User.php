<?php
class User extends PDO {
    public $id;
    public $username;
    public $email;
    public $created_at;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=example_db';
        $username = 'root';
        $password = '';
        parent::__construct($dsn, $username, $password);
    }

    public function getAllUsers() {
        $stmt = $this->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
