<?php
require 'Connection.class.php';

class Statement {
    private $conn;
    private $stmt;
    private $result;
    private $key;
    private $row;

    public function __construct() {
        $this->conn = new Connection();
        $this->conn = $this->conn->connect();
        $this->key = -1;
    }

    public function prepareStatement($sql) {
        $this->result = [];
        $this->stmt = $this->conn->prepare($sql);
        return $this;
    }

    public function executeQuery() {
        if ($this->stmt->execute()) {
            return true;
        }
        return false;
    }

    public function executeReader() {
        $this->executeQuery();
        $result = $this->stmt->get_result();
        while ($rows = $result->fetch_assoc()) {
            $this->result[] = $rows;
        }
        return $this;
    }

    public function next() {
        $this->key++;
        if (isset($this->result[$this->key])) {
            $this->row = $this->result[$this->key];
            return true;
        }
        $this->key = -1;
        return false;
    }

    public function getString($key) {
        return (isset($this->row[$key]) ? strval($this->row[$key]) : '');
    }

    public function getInt($key) {
        return (isset($this->row[$key]) ? intval($this->row[$key]) : 0);
    }

    public function getArray() {
        return $this->result;
    }

    public function numRows() {
        return count($this->result);
    }

}