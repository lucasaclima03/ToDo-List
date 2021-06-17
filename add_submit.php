<?php
include 'classes.php';
$todo = new Todo() ;
    if(isset($_POST['adicionar'])){
        $tarefa = $_POST['tarefa'];
        $inicio = $_POST['inicio'];
        $fim = $_POST['fim'];

        $todo->adicionar($tarefa,$inicio,$fim);

        header('Location:index.php');
        
    }
