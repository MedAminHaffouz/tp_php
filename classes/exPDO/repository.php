<?php
require_once 'DatabaseConnexion.php';

class repository {
    protected $table;
    protected $connex;

    public function __construct($table) {
        $this->table = $table;
        $this->connex = databaseconnexion::getinstance();
    }

    public function findall() {
        $req = $this->connex->prepare("SELECT * FROM {$this->table}");
        $req->execute();
        return $req->fetchall(PDO::FETCH_OBJ);
    }

    public function findbyid($id) {
        $req = $this->connex->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $req->execute([$id]);
        return $req->fetch(PDO::FETCH_OBJ);
    }

    public function create($data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $req = $this->connex->prepare("INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})");
        $req->execute(array_values($data));
    }

    public function delete($id) {
        $req = $this->connex->prepare("DELETE FROM {$this->table} WHERE id = ?");
        $req->execute([$id]);
    }
}
?>
