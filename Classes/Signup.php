<?php
// Dbh parent class -> Signup child class
// in order to use protected connect function from Dbh class
class Signup extends Dbh
{
    private $username;
    private $pwd;

    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    /**
     * Inserts a new user into the database with the provided username and password.
     *
     * This method prepares and executes an SQL statement to insert the
     * username and password into the 'users' table.
     * It uses prepared statements to prevent SQL injection.
     */
    private function insertUser()
    {
        $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd)";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    private function isEmptySubmit()
    {
        if (isset($this->username) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser()
    // public in order to be accessed in signup.inc.php to sign the user
    {
        // Error handler
        if ($this->isEmptySubmit()) {
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die(); // better to use die instead of exit
        }
        // If no errors then signup user
        $this->insertUser();
    }
}
