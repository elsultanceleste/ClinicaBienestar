<?php
session_start();
if (isset($_SESSION['id'])) {
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once('./components/liks.php') ?>
</head>

<body>

    <div class="general d-flex col-sm-12 col-md-12">

        <?php include './components/sidebar.php'; ?>


        <div class="main col-12 col-lg-9 ">


            <div class="header container b p-2 d-flex justify-content-between w-100 align-items-center col-12 ">
                <div class="btn-menu">
                    <button class="btn d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                        <i class="fa-solid fa-bars fs-2"></i>
                    </button>
                </div>

                <div class="user">
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i> <?php  if(isset($_SESSION['nombre']))echo $_SESSION['nombre']?>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Cuenta</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title text-center">Empleados</h5>
                                <div class=" w-100 d-flex align-items-center justify-content-center gap-3 ">
                                    <i class="fa-solid fa-user fs-3"></i>
                                    <span class="fs-3">150</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title text-center">Pacientes</h5>
                                <div class=" w-100 d-flex align-items-center justify-content-center gap-3 ">
                                    <i class="fa-solid fa-user fs-3"></i>
                                    <span class="fs-3">150</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class=" col-12 col-md-6 col-lg-4">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title text-center">Usuarios</h5>
                                <div class=" w-100 d-flex align-items-center justify-content-center gap-3 ">
                                    <i class="fa-solid fa-user fs-3"></i>
                                    <span class="fs-3">150</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-3 ms-2 ">
                <div class="row gap-3 justify-content-center">


                    <div class=" card col-11 col-md-6 col-lg-7">
                        <p class="h4 text-center">Pacientes</p>

                        <div style="width: 100%; height: 200px;">
                            <canvas id="myChartpie">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title text-center">Roles</h5>
                                <table class="table table-striped text-center" style="color: #417b61;">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">ROL</th>
                                            <th scope="col">Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Administrador</td>
                                            <td>2</td>



                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Medico</td>
                                            <td>8</td>


                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Recepcionista</td>
                                            <td>3</td>


                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Paciente</td>
                                            <td>100</td>


                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title text-center">Medicos</h5>
                                <table class="table table-striped" style="color: #417b61;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellidos</th>
                                            <th scope="col">Especialidad</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Zabulon</td>
                                            <td>Sima Oluy</td>
                                            <td>Neurologia</td>
                                            <td class="d-flex flex-column flex-lg-row gap-1">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-user-edit"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zabulon</td>
                                            <td>Sima Oluy</td>
                                            <td>Neurologia</td>
                                            <td class="d-flex flex-column flex-lg-row gap-1">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-user-edit"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zabulon</td>
                                            <td>Sima Oluy</td>
                                            <td>Neurologia</td>
                                            <td class="d-flex flex-column flex-lg-row gap-1">
                                                <button class="btn btn-success">
                                                    <i class="fa fa-user-edit"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>

    <?php include './components/sidebarResponsive.php'; ?>

    <?php require_once('./components/script.php') ?>





</body>

</html>