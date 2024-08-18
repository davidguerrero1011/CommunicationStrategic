<?php


class Connection {

    private $servername;
    private $username;
    private $password;
    private $database;
    public $connection;

    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "communicationstategic";
    }

    public function connected() {
        try {
            $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection; 
        } catch (PDOException $e) {
            echo "Connection Failed: ". $e->getMessage();
        }
    }

    public function store($names, $lastNames, $email, $phones, $description) {

        $conn = $this->connected();
        try {

            $conn->beginTransaction();
            $statement =  $conn->prepare("INSERT INTO `users` (`names`, `last_names`, `email`, `phone`, `description`, `created_at`, `updated_at`) VALUES (:names, :last_names, :email, :phone, :description, :created_at, :updated_at)");
            $statement->execute([
                'names'       => ucfirst($names),
                'last_names'  => ucfirst($lastNames),
                'email'       => $email,
                'phone'       => $phones,
                'description' => $description,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ]);

            $lastInsertId = $conn->lastInsertId();
            $conn->commit();
            return $lastInsertId;
        } catch (PDOException $e) {
            $conn->rollback();
            echo "Error: ". $e->getMessage(). "< /br>";
        }
    }
}

