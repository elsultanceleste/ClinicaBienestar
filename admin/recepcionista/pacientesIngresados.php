<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes ingresados</title>
    <?php include './components/estilos.php'?>

</head>
<body>

<div class="general d-flex col-sm-12 col-md-12">

    <?php include './components/sidebar.php'; ?>


    <div class="main col-12 col-lg-9 ">
    
        <!-- HEADER -->

        <div class="header container b p-2 d-flex justify-content-between w-100 align-items-center col-12 ">
            <div class="btn-menu">
            <button class="btn d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <i class="fa-solid fa-bars fs-2"></i>
            </button>
            </div>

            <div class="user">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Recepcionista
                    </a>
                    
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./perfil.php">Perfil</a></li>
                        <li><a class="dropdown-item" href="./cuenta.php">Cuenta</a></li>
                        <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- RESUMEN -->

        <div class="container">
            <div class="row d-flex justify-content-center">

                <div class="col-9 ">
                    <form action="" method="post">
                        <input type="text" placeholder="Buscar cita..." class="form-control" >
                    </form>
                </div>
            </div>
        </div>

        <!-- TABLA -->

        <div class="container w-100  mt-5 d-flex flex-column justify-content-center p-3">
            <p class="h4 w-100 text-center mb-5">PACIENTES INGRESADOS</p>

            

            <div class="table-responsive mt-5 ">
            <table class="table table-striped-columns table-success">
                <thead class="text-center">
                    <tr>

                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">??</th>
                    <th scope="col">Nº Sala</th>
                    <th scope="col">Nº Cama</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">Alta</th>

                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                    <th scope="row">1</th>
                    <td>Zabulon</td>
                    <td>Sima Oluy</td>
                    <td>??</td>
                    <td>7</td>
                    <td>2</td>
                    <td>12-12-2024</td>
                    <td>...</td>
                    </tr>

                    <tr>
                    <th scope="row">1</th>
                    <td>Zabulon</td>
                    <td>Sima Oluy</td>
                    <td>??</td>
                    <td>7</td>
                    <td>2</td>
                    <td>12-12-2024</td>
                    <td>...</td>
                    </tr>

                    <tr>
                    <th scope="row">1</th>
                    <td>Zabulon</td>
                    <td>Sima Oluy</td>
                    <td>??</td>
                    <td>7</td>
                    <td>2</td>
                    <td>12-12-2024</td>
                    <td>...</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>



        <!-- ASIDE-RESPONSIVE -->

        <?php include './components/sidebarResponsive.php'; ?>

            
        <!-- FOOTER -->
        <?php require( './components/footer.php'); ?>


    </div>    
</div>
    
</body>
</html>