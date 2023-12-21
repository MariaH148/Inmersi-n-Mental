<?php 
include_once('../config/config.php');
include('registropacientes.php');

$p=new registropacientes();
$data=$p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove=$p->delete($_GET['id']);
    if($remove){
        header('Location:'.ROOT.'/registropacientes/index.php');
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert">Error al Eliminar</div>';
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de sesiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('../menu.php') ?>
   <div class="container">
<h2 class="text-center mb-2">Calendario</h2>
<div class="row">
<?php 
    while($pt=mysqli_fetch_object($data)){
        echo"<div class= 'col'>";
            echo"<div class='border border-info p-2'>";
            echo "<h5>$pt->nombre $pt->edad</h5>";
              echo"<div>";
              echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/registropacientes/edit.php?id=$pt->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/registropacientes/index.php?id=$pt->id' >Eliminar</a> </div>";
              echo"</div>";
            echo"</div>";
        echo"</div>";
    }
?>
</div>
   </div> 
</body>
</html>