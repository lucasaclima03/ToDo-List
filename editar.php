<?php
include 'classes.php';
$todo = new Todo();

if(isset($_GET['editar'])) {

}
?>


<div class = container>
    <h1>Editar Task</h1>
    <form action="add_submit.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tarefa:</label><br>
            <input type="text" class="form-control" name="tarefa">        
        </div><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Data de ínicio:</label><br>
            <input type="date" class="form-control" name="inicio">        
        </div><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Data de fim:</label><br>
            <input type="date" class="form-control" name = "fim">        
        </div>
        <br>
        <input type="submit" value="Adicionar" name="adicionar" >
   
    </form>