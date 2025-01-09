<!DOCTYPE html>
<html lang="es">
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
                        <li><a class="dropdown-item" href="#">Cuenta</a></li>
                        <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- RESUMEN -->

        <div class="container">
            <div class="row">

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
                            <h5 class="card-title text-center">Citas totales</h5> 
                            <div class=" w-100 d-flex align-items-center justify-content-center gap-3 ">
                            <i class="fa-solid fa-calendar-check fs-3"></i>
                                <span class="fs-3">15</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Citas Pendientes</h5> 
                            <div class=" w-100 d-flex align-items-center justify-content-center gap-3 ">
                            <i class="fa-regular fa-calendar-check fs-3"></i>
                                <span class="fs-3">7</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABLA -->

        <div class="container w-100 h-50 d-flex flex-column justify-content-center p-3">
            <p class="h4 w-100 text-center">CITAS DE HOY</p>
            <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Medico</th>
                    <th scope="col">decripcion</th>

                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                    <th scope="row">1</th>
                    <td>Zabulon</td>
                    <td>Sima Oluy</td>
                    <td>12:30</td>
                    <td>En espera</td>
                    <td>Dr. Rafael</td>
                    <td>
                        Lorem, ipsum dolor sit 
                        amet consectetur adipisicing elit. 
                        Quis, maiores!
                    </td>
                    </tr>

                    <tr>
                    <th scope="row">2</th>
                    <td>Zabulon</td>
                    <td>Sima Oluy</td>
                    <td>12:30</td>
                    <td>En espera</td>
                    <td>Dr. Rafael</td>
                    <td>
                        Lorem, ipsum dolor sit 
                        amet consectetur adipisicing elit. 
                        Quis, maiores!
                    </td>
                    </tr>

                    <tr>
                    <th scope="row">3</th>
                    <td>Zabulon</td>
                    <td>Sima Oluy</td>
                    <td>12:30</td>
                    <td>En espera</td>
                    <td>Dr. Rafael</td>
                    <td>
                        Lorem, ipsum dolor sit 
                        amet consectetur adipisicing elit. 
                        Quis, maiores!
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>



</div>

<?php include './components/sidebarResponsive.php'; ?>


    

<script src="./js/all.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>