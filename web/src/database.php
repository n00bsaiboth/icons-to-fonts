<?php

namespace App;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database {
    private object $pdo;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '../../');
        $dotenv->load();

        $host = $_ENV['DB_HOST'];
        $db = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec("SET NAMES utf8");

            echo "Connect was succesful.";
        } catch (PDOException $e) {
            throw new PDOException("Error: Could not connect to the database: " . $e->getMessage());
        }
    }
}

$database = new Database();