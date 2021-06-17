<?php
include 'classes.php';
$todo = new Todo();

if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $todo->excluirPeloId($id);
}

header("Location: index.php");