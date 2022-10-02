<?php
class DBAccess
{
    private $_DSN;
    private $_userName;
    private $_password;
    private $_pdo;

    public function __construct($dsn, $userName, $password)
    {
        $this->_DSN = $dsn;
        $this->_userName = $userName;
        $this->_password = $password;
    }

    public function connect()
    {
        try {
            $this->_pdo = new PDO($this->_DSN, $this->_userName, $this->_password);
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->_pdo;
    }

    public function disconnect()
    {
        $this->_pdo = "";
    }

    public function getRows($stmt)
    {
        try {
            $stmt->execute();
            $rows = $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }

        return $rows;
    }

    public function getRow($stmt)
    {
        try {
            $stmt->execute();
            $row = $stmt->fetch();
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }

        return $row;
    }

    public function getValue($stmt)
    {
        try {
            $stmt->execute();
            $value = $stmt->fetchColumn();
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }

        return $value;
    }

    public function executeNonQuery($stmt, $pkid = false)
    {
        try {
            $value = $stmt->execute();

            if ($pkid)
                $value = $this->_pdo->lastInsertId();
        } catch (PDOException $e) {
            die("Query falied: " . $e->getMessage());
        }

        return $value;
    }
}
