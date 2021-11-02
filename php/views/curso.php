<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/Proyecto-BDMM-PCI/php/DAO/cursoDAO.php';

  session_start();
  if (isset($_SESSION["Id_Usuario"])){
    $usuarioActivo = $_SESSION["Id_Usuario"];
  }

  $cursoDAO = new CursoDAO();
  $cur = new CursoModel();
  $cur->addCursoID($_GET["Id_Curso"]);
  $curso = $cursoDAO->getCurso("CURSO", $cur)[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>

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
                <?php if (isset($_SESSION["Id_Usuario"])): ?>
                        <?php if ($_SESSION["Tipo"] == "E"): ?>
                            <li class="nav-item">
                                <?php echo '<a class="nav-link active" href="./perfilM.php?Id_Usuario='.$_SESSION["Id_Usuario"].'">Perfil</a>' ?>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <?php echo '<a class="nav-link active" href="./perfilA.php?Id_Usuario='.$_SESSION["Id_Usuario"].'">Perfil</a>' ?>
                            </li>
                        <?php endif ?>
                <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="./login.php">Perfil</a>
                        </li>
                <?php endif ?>
                <li class="nav-item">
                        <a class="nav-link active" href="./busquedaavanzada.php">Busqueda Avanzada</a>
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

        <!--Cuerpo-->
        <div class="container">
            <div class="row">
              <!--Titulo-->
              <div class="row">
                <h1 class="mt-4" ><?php echo $curso->Titulo ?>
                </h1>
      
              </div>
              <li class="nav-item dropdown ">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="float:right;" >
                  <i class="fas fa-ellipsis-h "></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Borrar</a></li>
                </ul>
              </li>
      
              <!--Autor + Foto de perfil-->
              <p class="lead"> por <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($curso->Foto_Usuario).'" alt="" style="width:50px; border-radius:25px;padding-left:5px;padding-right:5px;">' ?>
                <?php echo '<a href="./perfilM.php?Id_Usuario='.$curso->Id_Usuario.'" class="btn btn-primary">'.$curso->Nombre_Usuario.'</a>' ?>
              </p>
              
              <hr>
              <!--Fecha de la publicacion-->
              <p class="fecha_publicacion" style="font-size: 80%;"> Publicado el <?php echo $curso->Fecha_Creacion ?></p>
              <hr>
              <!--Imagen de la publicacion-->
              <div class="row">
                <div class="col-7">
                    <img class="img-fluid rounded" src="http://placehold.it/700x400" alt="">
                    <!--Iconos de valoracion-->
                    <form action="" class="was-validated" method="GET">
                    <input  type="hidden" id="idp" name="idp" value="">
                    <br>
                    <button class="btn btn-primary btn-sm" type="submit" name="UtilP" >Marcar curso como Util  <i class="fas fa-thumbs-up"></i></button>

                    </form>
                </div>
                <div class="col-5">
                    <!--Contenido del post-->   
                    <h3 style="text-align: center;">Precio del curso: $<?php echo $curso->Costo ?></h3>
                    <div class="d-grid gap-2">
                      <form action="./pago.php">
                        <div class="m">
                    <button class="btn btn-lg btn-primary ">Comprar</button>
                  </div>
                  </form>
                    </div>
                    <p class="contenido_post"><br><?php echo $curso->Descripcion ?></p>
                </div>

              </div>
              <hr>
              <h3>Niveles</h3>
              <br>
              <div class="col-12" style="min-height: 500px; max-height: 500px; overflow-y: scroll;">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-lg" >
                            <div class="card-body ">
                              <h5 class="card-title">Nivel 1</h5>
                              <p class="card-text">Variables</p>
                              <a href="./pago.php" class="btn btn-primary justify-content-end">Comprar</a>
                            </div>
                        </div>
                        <br>
                    </div>
    
                    <div class="col-12">
                        <div class="card shadow-lg" >
                            <div class="card-body ">
                              <h5 class="card-title">Nivel 2</h5>
                              <p class="card-text">Condiciones</p>
                              <a href="./pago.php" class="btn btn-primary justify-content-end">Comprar</a>
                            </div>
                        </div>
                        <br>
                    </div>
    
                    <div class="col-12">
                        <div class="card shadow-lg" >
                            <div class="card-body ">
                              <h5 class="card-title">Nivel 3</h5>
                              <p class="card-text">Ciclos</p>
                              <a href="./pago.php" class="btn btn-primary justify-content-end">Comprar</a>
                            </div>
                        </div>
                        <br>
                    </div>
    
                    <div class="col-12">
                        <div class="card shadow-lg" >
                            <div class="card-body ">
                              <h5 class="card-title">Nivel 4</h5>
                              <p class="card-text">Punteros</p>
                              <a href="./pago.php" class="btn btn-primary justify-content-end">Comprar</a>
                            </div>
                        </div>
                        <br>
                    </div>
    
                    <div class="col-12">
                        <div class="card shadow-lg" >
                            <div class="card-body ">
                              <h5 class="card-title">Nivel 5</h5>
                              <p class="card-text">Archivos</p>
                              <a href="./pago.php" class="btn btn-primary justify-content-end">Comprar</a>
                            </div>
                        </div>
                        <br>
                    </div>
    
                  </div>
            </div>


              <!--Contenido del post-->

              <br>
              <hr>
              <br>
              <!--Escribe Respuesta-->
              <div class="card my-4">
                <h5 class="card-header">Deja un comentario:</h5>
                <div class="card-body">
                  <form action="">
                    <div class="form-group">
                      <textarea class="form-control" rows="3"></textarea><br>
                    </div>
      
                    <button type="submit" class="btn btn-primary">Publicar</button>
                  </form>
                </div>
              </div>
              <hr>
              <h1 class="mt-4">Comentarios</h1>
              <!--Escribe Respuesta-->
              <hr>
              <!--Respuestas-->
              <div class="media mb-4">

                <p class="lead"> por <img src="./Imagenes/pfp.jpg" alt="" style="width:50px; border-radius:25px;padding-left:5px;padding-right:5px;"><a href="./perfilA.php"> Jane Doe</a> </p>
                
                <div class="media-body">
      
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>

                <br>

                <!--Respuesta correcta-->
      
      
                <br>
                <hr>
              </div>
      
              <!--Respuestas-->
      
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