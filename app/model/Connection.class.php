<?php

class Connection {
    private $dbDriver;
    private $db;
    private $dbHost;
    private $dbUser;
    private $dbPassword;
    private $conn;

    public function __construct() {
        $this->dbDriver = $GLOBALS['dbDriver'];
        $this->db = $GLOBALS['db'];
        $this->dbHost = $GLOBALS['dbHost'];
        $this->dbUser = $GLOBALS['dbUser'];
        $this->dbPassword = $GLOBALS['dbPassword'];
    }

    public function connect() {
        if ($this->dbDriver = 'MySQL') {
            $this->conn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword, $this->db);
            if (!$this->conn) {
                return "Error: Não foi possível conectar-se ao banco de dados " . PHP_EOL; 
            } else {
                return $this->conn;
            }
        }
    }

    public function disconnect() {
        if ($this->conn) {
            mysqli_close($this->conn);
            return 'Desconectado';
        } else {
            return 'Não há conexão válida';
        }
    }
}