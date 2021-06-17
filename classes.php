<?php 
include 'config.php';

class Todo {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=".Config::DB_NAME.";host=".Config::HOST, Config::USER, Config::PASS);
    }

    public function adicionar($tarefa,$inicio,$fim) {
        $sql = "INSERT INTO tasks (tarefa,inicio,fim) VALUES (:tarefa, :inicio, :fim)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':tarefa',$tarefa);
        $sql->bindValue(':inicio',$inicio);
        $sql->bindValue(':fim',$fim);
        $sql->execute();

        return true;
    }
    
    public function getAll(){
        $sql = "SELECT * FROM tasks";
        $sql = $this->pdo->query($sql);
        
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        } else {
            return array();
        }
    }

    public function editar($tarefa,$inicio,$fim){
        $sql = "UPDATE tasks SET tarefa= :tarefa, inicio=:inicio, fim=:fim WHERE id=:id";
        $sql= $this->pdo->prepare($sql);
        $sql->bindValue(':tarefa',$tarefa);
        $sql->bindValue(':inicio',$inicio);
        $sql->bindValue(':fim',$fim);
        $sql->execute();
    }
    
    public function excluirPeloId($id) {
        
        $sql = "DELETE FROM tasks WHERE id= :id";
        $sql=$this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    
    }
}