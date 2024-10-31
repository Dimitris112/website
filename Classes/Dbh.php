<?php
// Dbh as for Database Handler

class Dbh
{
    private $host = "localhost";
    private $dbname = "businessdb";
    private $dbusername = "root";
    private $dbpassword = "";

    /**
     * Establishes a connection to the database using PDO.
     * PDO -> PHP Data Objects -> An object-oriented interface to the database.
     * @return PDO|null Returns a PDO instance on success, or null on failure.
     * @throws PDOException If the connection to the database fails.
     */

    // must use "protected" to be able to use it in the child class - sensitive information
    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" .
                $this->dbname, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
