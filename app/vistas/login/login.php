<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $css = 'public/css/login.css';
    require(RUTA_APP . '/vistas/layout/head.php');
    ?>
</head>

<body>
    <div class="contenedor_global">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#"><img src=" <?php echo RUTA_URL ?>public/img/sena.png" height="60px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-between">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorias
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Futbol</a>
                                <a class="dropdown-item" href="#">Entrenamientos</a>
                            </div>
                        </li>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary mr-2" type="button" id="button-addon2">Buscar</button>
                            </div>
                        </div>
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0"> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#exampleModal">
                        Iniciar sesión
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-white" id="exampleModalLabel">Inicia sesión</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="text-white">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="frmlogin-start" method="POST">
                                        <div class="form-group mb-3">
                                            <label for="">Documento de identidad</label>
                                            <input type="text" class="form-control w-100" placeholder="Documento" name="documento">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Contraseña</label>
                                            <input type="text" class=" form-control w-100" placeholder="Contraseña" name="password">
                                        </div>
                                        <div class="form-group">
                                            <button id="btnlogin" type="submit" class="btn btn-danger w-100">Iniciar sesión</button>
                                            <p class="text-center w-100 mt-2">¿Has olvidado la contraseña?</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal2">
                        Registrate
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" id="modal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-white" id="exampleModalLabel">Registrate </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="text-white">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="frmlogin-register" method="POST" autocomplete="off">
                                        <div class="form-group mb-3">
                                            <label for="validationCustom01">Nombre completo</label>
                                            <input type="text" class=" form-control w-100" placeholder="Nombre" id="nombre" name="complete_name">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="validationCustom01">Documento de identidad</label>
                                            <input type="text" class=" form-control w-100" placeholder="Documento" id="documento" name="document_number">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="validationCustom01">Contraseña</label>
                                            <input type="password" class=" form-control w-100" placeholder="Contraseña" id="password" name="password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="validationCustom01">Fecha de nacimiento</label>
                                            <input type="date" class=" form-control w-100" placeholder="Documento" id="birth_date" name="birth_date">
                                        </div>
                                        <div class="form-group d-flex justify-content-between">
                                            <select name="sports" id="sports" class="form-control w-75">
                                                <option value="1">Futbol</option>
                                            </select>
                                            <select name="position" id="position" class="form-control w-75">
                                                <option value="1">Delantero</option>
                                                <option value="2">Central</option>
                                                <option value="3">Defensa</option>
                                                <option value="4">Portero</option>
                                            </select>
                                            <script>
                                              
                                            </script>

                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal3" required>
                                                Posiciones
                                            </button>
                                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-white" id="exampleModalLabel2">
                                                                Cancha </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" class="text-white">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body2 cancha">
                                                            <div class="posicion1">
                                                                <button onclick="stopDefAction()"><img src="img/camiseta4.png" class="buso"></a></button>
                                                                <img src="img/camiseta4.png" class="buso">
                                                                <img src="img/camiseta4.png" class="buso">
                                                            </div>
                                                            <div class="posicion2">
                                                                <img src="img/camiseta4.png" class="buso">
                                                                <img src="img/camiseta4.png" class="buso">
                                                                <img src="img/camiseta4.png" class="buso">
                                                            </div>
                                                            <div class="posicion3">
                                                                <img src="img/camiseta4.png" class="buso">
                                                                <img src="img/camiseta4.png" class="buso">
                                                                <img src="img/camiseta4.png" class="buso">
                                                                <img src="img/camiseta4.png" class="buso">
                                                            </div>
                                                            <div class="posicion4">
                                                                <img src="img/camiseta8.png" class="buso">
                                                            </div>
                                                        </div>
                                                        <script type="text/javascript">

                                                            function stopDefAction(evt) {
                                                                jQuery("#exampleModal3").modal("show");
                                                            }
                                                        </script>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                                Instrucciones
                                                            </button>
                                                            <div class="collapse" id="collapseExample">
                                                                <div class="card card-body">
                                                                    Por favor seleccione una camisa que se encuentre
                                                                    en la posición
                                                                    en la cual se desempeña usted en el campo de
                                                                    futbol
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="btnregister" class="btn btn-danger w-100" onclick="ajax()">Registrate</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-header">
                                    <?php if (!empty($datos)) : ?>
                                        <?php foreach ($datos as $dato) : ?>
                                            <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
                                                <h5><?php echo $dato; ?></h5>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </nav>
        </header>
        <article>
            <div class="text-center">
                <strong>
                    <h2>"Cuando nadie cree en ti <br> eres el unico de demostrar <br> lo contrario"</h2>
                </strong>
            </div>
        </article>
        <footer>
            <?php require(RUTA_APP . '/vistas/layout/footer.php') ?>
        </footer>
    </div>
</body>

</html>