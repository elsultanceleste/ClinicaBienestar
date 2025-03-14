<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
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
                            <i class="fa-solid fa-user"></i> Usuario
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
                                <h5 class="card-title text-center">Total de pacientes</h5>
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
                                <h5 class="card-title text-center">Citas de hoy</h5>
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
                                <h5 class="card-title text-center">Consultas realizadas</h5>
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
                        <p class="h4 text-center">Grafica de pacientes atendidos</p>

                        <div style="width: 100%; height: 200px;">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>

                    <div class=" card col-11 col-md-6 col-lg-4">
                        <p class="h4 text-center">Tipos de citas</p>

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
                                <h5 class="card-title text-center">Citas de hoy</h5>
                                <table class="table table-striped" style="color: #417b61;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Paciente</th>
                                            <th scope="col">Hora</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mark</td>
                                            <td>10:00</td>
                                            <td>
                                                <button class="btn btn-primary">Ver</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>11:00</td>
                                            <td>
                                                <button class="btn btn-primary">Ver</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>12:00</td>
                                            <td>
                                                <button class="btn btn-primary">Ver</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title text-center">Solicitudes de citas</h5>
                                <table class="table table-striped" style="color: #417b61;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Paciente</th>
                                            <th scope="col">Hora</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mark</td>
                                            <td>10:00</td>
                                            <td>
                                                <button class="btn btn-success">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jacob</td>
                                            <td>11:00</td>
                                            <td>
                                                <button class="btn btn-success">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Larry</td>
                                            <td>12:00</td>
                                            <td>
                                                <button class="btn btn-success">
                                                    <i class="fa fa-check"></i>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <?php include './components/sidebarResponsive.php'; ?>




    <script src="./js/all.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/chart.umd.js"></script>
    <script src="./js/graficas.js"></script>

</body>

</html>