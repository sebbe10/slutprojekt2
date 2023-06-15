<?php
$con = new mysqli("localhost", "slutprojekt2", "abc123", "slutprojekt2");

if (!$con) {
    die(mysqli_error($con));
}

// class DB
// {
//     private $pdo;
//     public $sql;
//     public function __construct(PDO $pdo, $sql)
//     {
//         $this->pdo = $pdo;
//         $this->sql = $sql;
//     }

//     public function getAllInfo()
//     {
//         $sql = "SELECT * FROM info ORDER BY name";

//         $stmt = $this->pdo->prepare($sql);
//         $stmt->execute();
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
//     }
// }
