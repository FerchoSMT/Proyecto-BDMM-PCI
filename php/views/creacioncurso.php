<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>

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
    <!--Summernote-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

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
        <!--Cuerpo-->
       <div class="container">
           <div class="row">
            
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="padding-left: 40%;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="v-pills-datos-tab" data-bs-toggle="pill" data-bs-target="#v-pills-datos" type="button" role="tab" aria-controls="v-pills-datos" aria-selected="true">Datos Generales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="v-pills-niveles-tab" data-bs-toggle="pill" data-bs-target="#v-pills-niveles" type="button" role="tab" aria-controls="v-pills-niveles" aria-selected="false">Niveles</button>
                
                </li>
            </ul>
            <div class="col-1">

                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    </div>

                </div>
            </div>
            <div class="col-10">
                <form action="./curso.php" id="creacion-curso" class="was-validated" method="POST">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-datos" role="tabpanel" aria-labelledby="v-pills-datos-tab">
                        
                        <h2 style="text-align: center;">Datos Generales</h2>

                            <legend>Llena los campos para crear tu curso</legend>
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Titulo</label>
                                <input id="titulo" name="titulo" class="form-control" type="text" aria-label="default input example">
                            </div>
            
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripcion del curso</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                            </div>
            
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoria: </label>
                                <select class="form-select" name="categoria" aria-label="Default select example">
                                    <option value="1">Categoria 1</option>
                                    <option value="2">Categoria 2</option>
                                    <option value="3">Categoria 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="categorianew" class="form-label">Añadir nueva categoria (opcional)</label>
                                <input id="categorianew" class="form-control" name="nuevaCat" type="text" aria-label="default input example">
                            </div>
                            <div class="mb-3">
                                <label for="desCnew" class="form-label">Descripcion de la nueva categoria (opcional)</label>
                                <textarea class="form-control" name="nueva-des" id="desCnew" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Seleccione una imagen para su curso</label>
                                <input class="form-control" name="imagenCurso" type="file" id="formFile">
                            </div>

                  
                    </div>
                    <div class="tab-pane fade" id="v-pills-niveles" role="tabpanel" aria-labelledby="v-pills-niveles-tab">
                        <h2 style="text-align: center;">Niveles</h2>

                        <h3>Nivel 1</h3>

                        <label for="formCosto" class="form-label">Costo del nivel (opcional)</label>
                        <div class="input-group mb-3">

                            <span class="input-group-text">$</span>
                            <input type="number" name="costo" class="form-control" aria-label="Costo">
                            <span class="input-group-text">.00</span>
                          </div>
                        
                          <div class="mb-3">
                            <label for="descripcion" class="form-label">Informacion del nivel</label>
                            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                        </div>

                          <div class="mb-3">
                            <label for="formVideo" class="form-label">Seleccione una imagen para el nivel</label>
                            <input class="form-control" name="videoNivel" type="file" id="formVideo">
                        </div>


                        <div class="mb-3">
                            <label for="formVideo" class="form-label">Seleccione un video para el nivel</label>
                            <input class="form-control" name="videoNivel" type="file" id="formVideo">
                        </div>

                        


                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success btn-sm" style="text-align: center;">Agregar Nivel<i class="fas fa-plus"></i></button>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary btn-sm">Publicar</button>
                </div>
                </form>

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

    <!--Summernote-->


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.summernote').summernote();
      });
    </script>
    <!--JQUERY VALIDATION-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="./JScript/aditionalMethods.min.js"></script>
    <script src="./JScript/validation-curso.js"></script>

</body>
</html>