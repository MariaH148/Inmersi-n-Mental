<?php  

include_once('../config/config.php');
include('registropacientes.php');

$p=new registropacientes();
$dp=mysqli_fetch_object($p->getOne($_GET['id']));

if(isset($_POST) && !empty($_POST)){
    $update=$p->update($_POST);
    if($update){
        $mensaje = "<div class='alert-success' role='alert'>Registro modificado con éxito</div>";
    }else{
        $mensaje = "<div class='alert-danger' role='alert'>Error!</div>";

    }
}

?>  

<DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        
        <?php include('../menu.php') ?>
       <div class="container">
       <?php 
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>  
        <h2 class="text-center mb-2">Agendar sesión</h2>
        <form method="POST" enctype="multipart/form-data">

        <div class=" row mb-2">
            <div class=" col">
                <input type="text" name="edad" id="edad" placeholder=" Edad del paciente" class="form-control" value="<?=$dp->edad?>"/> 
                <input type="hidden" name="id" id="id" placeholder=" Edad del paciente" class="form-control" value="<?=$dp->id?>"/> 
            </div>
            <div class=" col">
            <input type="text" name="nombre" id="nombre" placeholder=" Nombre del paciente" class="form-control"value="<?=$dp->nombre?>"/> 
            </div>
        </div>
        <div class=" row mb-2">
            <div class=" col">
                <input type="text" name="correo" id="correo" placeholder="Correo del paciente" class="form-control" value="<?=$dp->correo?>"/>
            </div>
            <div class=" col">
            <input type="text" name="celular" id="celular" placeholder=" Celular del paciente" class="form-control" value="<?=$dp->celular?>"/> 
            </div>
        </div>

        <div class=" row mb-2">
            <div class=" col">
                <textarea name="motivodeconsulta" id="motivodeconsulta" placeholder=" Motivo de consulta del paciente" class="form-control"><?=$dp->motivodeconsulta?> </textarea>
            </div>
            <button class="btn btn-success">Agendar</button>

        </form>

       </div> 
    </body>
    </html>