<?php  

include_once('../config/config.php');
include('registropacientes.php');

if(isset($_POST) && !empty($_POST)){
    $p = new registropacientes();

    $save=$p-> save($_POST);
    if ($save){
        $mensaje = '<div class="alert alert-success">Sesión agendada</div>';
    }else{
        $mensaje = '<div class="alert alert-danger">Error al registar</div>';

}

}

?>  

<DOCTYPE html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendar sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../Estilos/Style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary barra">
        <div class="container-fluid">
            <a href="./index.html"><img src="../Imagenes/Logo.png"class="img-logo" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav centrado">
              <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
              <a class="nav-link" href="../Pagina2.html">Salud mental</a>
              <a class="nav-link" href="./registropacientes/add.php">Agendar Sesión</a>
            </div>
          </div>
        </div>
      </nav>
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
                <input type="text" name="edad" id="edad" placeholder=" Edad del paciente" class="form-control"> 
            </div>
            <div class=" col">
            <input type="text" name="nombre" id="nombre" placeholder=" Nombre del paciente" class="form-control"> 
            </div>
        </div>
        <div class=" row mb-2">
            <div class=" col">
                <input type="text" name="correo" id="correo" placeholder="Correo del paciente" class="form-control"> 
            </div>
            <div class=" col">
            <input type="text" name="celular" id="celular" placeholder=" Celular del paciente" class="form-control"> 
            </div>
        </div>

        <div class=" row mb-2">
            <div class=" col">
                <textarea name="motivodeconsulta" id="motivodeconsulta" placeholder=" Motivo de consulta del paciente" class="form-control"></textarea>
            </div>
            <div class="btn-container">
        <button class="btn btn-custom btn-block">Agendar</button>
    </div>

        </form>

        </div> 
        <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <a href="index.html"><img src="../Imagenes/Logo.png" alt="" class="img-fluid logo-footer"></a>
                        <div class="footer-about">
                            <p class="justificado" style="letter-spacing: -1px;">
                              María Helena González De La Hoz
                            </p> 
                            <p class="justificado">
                              Psicóloga 
                            </p>
                            <p class="justificado">
                              Profesora de Preescolar 
                            </p>
                        </div>
  
            </div>
            <div class="col-md-4">
              <div class="useful-link">
                <h2>Links de interés</h2>
                <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                <div class="use-links">
                    <li><a href="https://www.psicologia-online.com/" target="_blank">psicologia-online</a></li>
                    <li><a href="https://psicologiaymente.com/" target="_blank">psicologiaymente</a></li>
                    <li><a href="https://www.apa.org/" target="_blank">APA</a></li>
                </div>
              </div>
  
            </div>
                      <div class="col-md-3">
                          <div class="social-links">
                <h2>Redes Sociales</h2>
                <img src="./assets/images/about/home_line.png" alt="">
                <div class="social-icons">
                  <li><a href=""><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
                  <li><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                  <li><a href=""><i class="fa-brands fa-linkedin-in"></i>X</a></li>
                </div>
              </div>
    </body>
    </html>