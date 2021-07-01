<?php
include 'classes.php';
$todo = new Todo();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>No Procrastineixon</title>
  </head>
  <body>
    <div class = container>
    <h1>No Procrastineixon To-do List</h1>
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
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>            
            <th scope="col">Tarefa</th>
            <th scope="col">Data Início</th>
            <th scope="col">Data Fim</th>
            <th scope="col">Status</th>
            <th scope="col">Ações</th>
            
            </tr>
        </thead>
        
        

        <tbody>
            <?php
                $lista = $todo->getAll();
                foreach($lista as $item):
            ?>
            <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['tarefa']; ?></td>
            <td><?php echo $item['inicio']; ?></td>
            <td><?php echo $item['fim']; ?></td>
            <td>                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Feito</label>
                    
                </div>                                
            </td>
            <td>
            <a href="editar.php?id=<?php echo $item['id'];?>" name = "editar">[Editar]</a>
            <a href="excluir.php?id=<?php echo $item['id'];?>" name="excluir">Excluir</a>
            </td>
            
                       
        </tbody>
        <?php
        endforeach;
        ?>
        </tr> 
    </table>

    
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
  </body>
</html>