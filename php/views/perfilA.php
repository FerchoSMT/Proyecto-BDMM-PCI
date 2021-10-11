<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/usuarioDAO.php';

  session_start();
  
  $usuarioDAO = new UsuarioDAO();
  $us = new UsuarioModel();
  $us->addUserID($_SESSION["Id_Usuario"]);
  $usuario = $usuarioDAO->getUser("VERPF", $us)[0];
  



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Alumno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="./Imagenes/Logo.png"><!--Aqui va la imagen del icono de la pagina-->
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">

    <!--Footer-->
    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
    rel="stylesheet"
    />
    <!--Footer-->


    <style>
      .bg{
          background-image: url(./Imagenes/c.jpg);
          background-position: center;
          background-size: 160%;
          border-radius: 10px 0px 0px 10px;

      }
  </style>
</head>
<body>
        <!--Header-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"style=" width: 100%; top:0px;" >
          <div class="container-fluid" >
            <a class="navbar-brand" href="./main.php"><img src="./Imagenes/Logo.png" width="50" alt="Error de carga"></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon bg-dark"></span>
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./main.php">Inicio</a>
  
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./login.php">Perfil</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorias
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./busqueda.php">Categoria 1</a></li>
                    <li><a class="dropdown-item" href="./busqueda.php">Categoria 2</a></li>
                    <li><a class="dropdown-item" href="./busqueda.php">Categoria 3</a></li>
                    <li><a class="dropdown-item" href="./busqueda.php">Categoria 4</a></li>
                    <li><a class="dropdown-item" href="./busqueda.php">Categoria 5</a></li>
                  </ul>
                </li>
              </ul>
              <form action="./busqueda.php"  class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Escribe para buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>
        <!--Header-->
          <br>
          <br>
        <!--Cuerpo-->



        <div class="container">
            <div class="row profile">
                <div class="col-md-4">
                  <div class="profile-sidebar text-sm-center">
                    <div class="profile-userpic">
                      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($usuario->Foto).'" alt="" class="img-responsive img-circle" style="width: 50%;  border-radius: 10px;">' ?>
                      <!--img src="./Imagenes/pfp.jpg" alt="" class="img-responsive img-circle" style="width: 50%;  border-radius: 10px;"-->
                    </div>
                    <br>
                    <div class="profile-user-title">
                      <h6>Nombre:</h6>
                      <div class="profile-user-fname">
                        <?php echo $usuario->Nombre . " " . $usuario->Apellido_P . " " . $usuario->Apellido_M?>
                      </div>
                      <h6>Correo electronico:</h6>
                      <div class="profile-user-email">
                        <?php echo $usuario->Email?>
                      </div>
                      <h6>Edad:</h6>
                      <div class="profile-user-age"> 
                        <?php echo $usuario->Edad?>
                      </div>
                      <h6>Rol:</h6>
                      <div class="profile-user-age"> 
                        Alumno
                      </div>
                    </div>
                    <div class="user-buttons"></div>
                    <form action="./editarperfil.php">
                      <button class="btn btn-success btn-sm">Editar  <i class="fas fa-user-edit"></i></button>
                    </form>
                    <form action="/Proyecto-BDMM-PCI/php/controllers/cLogin.php">
                      <button class="btn btn-danger btn-sm">Cerrar Sesion  <i class="fas fa-door-closed"></i></button>
                    </form> 
                    </div>

                    <br>
                   
                </div>
                <div class="col">

                  <ul class="nav nav-pills justify-content-center nav-dark bg-dark">
                    <li class="nav-item">
                      <button class="nav-link active bg-primary text-white" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Cursos</button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link bg-primary text-white" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Diplomas</button>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./mensajes.php">Mensaje</a>
                    </li>
                  </ul>

                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <br>
                      <div class="card">
                        <div class="row g-0">
                          <div class="col-md-8">
                            <div class="card-header">
                              Curso de C++
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Nivel 1 de 5</h5>
                              <p class="card-text">Curso iniciado: 02/09/2021</p>
                              <a href="./curso.php" class="btn btn-primary">Ir al curso</a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <img src="./Imagenes/c.png" style="width: 90%;"  alt="">
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="card">
                        <div class="row g-0">
                          <div class="col-md-8">
                            <div class="card-header">
                              Curso de C#
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Nivel 5 de 5</h5>
                              <p class="card-text">Curso iniciado: 25/08/2021 Curso terminado: 27/08/2021</p>
                              <a href="./curso.php" class="btn btn-primary">Ir al curso</a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <img src="./Imagenes/cm.png" style="width: 90%;"  alt="">
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <br>
                        <img src="./Imagenes/Diplomas/Diploma.png" style="width: 100%;" alt="">
                    </div>
                  </div>

                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center ">
                      <li class="page-item"><a class="page-link" href="#">Previo</a></li>

                      <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                    </ul>
                  </nav>

                </div>
            </div>
        </div>




        <!--Cuerpo-->
        <br>
        <br>
        <!--Footer-->
        <footer class="page-footer bg-dark">
            <div style="background-color:#0F84BA">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-12 text-center">
                            <a href="#"><i class="fab fa-facebook-square text-white mr-3" style="font-size: 30px;"></i></a>
                            <a href="#"><i class="fab fa-twitter-square text-white mr-3" style="font-size: 30px;"></i></a>
                            <a href="#"><i class="fab fa-instagram-square text-white" style="font-size: 30px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="container text-center  text-light text-md-left mt-5">
                <div class="row">
                    <div class="col-md-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Desarrolladores:</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px;">
                        <p class="mt-1">Fernando Moncayo Marquez</p>
                        <a class="mt-1 text-white" href="#" >fermoncam506@gmail.com</a>
                        <br>
                        <p class="mt-1">Luis Alejandro Galvan Ortiz</p>
                        <a class="mt-1 text-white" href="#">luisg.12@outlook.com</a>
                    </div>
    
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Categorias:</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px;">
                        <ul class="list-unstyled ">
                            <li class="my-2" ><a href="#" class="text-white">Categoria 1</a></li>
                            <li class="my-2" ><a href="#" class="text-white">Categoria 2</a></li>
                            <li class="my-2" ><a href="#" class="text-white">Categoria 3</a></li>
                            <li class="my-2" ><a href="#" class="text-white">Categoria 4</a></li>
                            <li class="my-2" ><a href="#" class="text-white">Categoria 5</a></li>
                        </ul>
                    </div>
    
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Repositorio:</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px; ">
                        <p></p>
                        <a class="mt-0 text-white" href="https://github.com/FerchoSMT/Proyecto-BDMM-PCI.git" target="_blank" >Repositorio del proyecto</a>
                    </div>
    
                    <div class="col-md-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">We Learn:</h6>
                        <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px;">
                        <ul class="list-unstyled ">
                            <li class="my-2" ><i class="fas fa-home mr-3"> Monterrey, Nuevo Leon</i></li>
                            <li class="my-2" ><i class="fas fa-envelope mr-3"> WeLearn@gmail.com</i></li>
                            <li class="my-2" ><i class="fas fa-phone  mr-3"> 8112298194</i></li>
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="footer-copyright text-center py-3 text-white bg-black">
                <p>&copy; Copyright
                    <a href="#" class="text-white">WeLearn.com</a>
                    <p >Diseñado por We Learn</p>
                </p>
            </div>
        </footer>
        <!--Footer-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</body>
</html>