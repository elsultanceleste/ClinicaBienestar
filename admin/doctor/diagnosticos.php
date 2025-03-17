<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostico</title>
    <?php require_once('./components/liks.php') ?>
</head>

<body>

    <div class="general d-flex col-sm-12 col-md-12">
        <?php require_once('./components/sidebar.php') ?>
        <?php require_once('./components/sidebarResponsive.php') ?>
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

                <!-- TABLA DE Diagnostico oculares -->
                <div class="row">
                    <div class="col-12">

                        <div class="d-flex justify-content-around">
                            <h2 class="text-center">Diagnósticos</h2>

                            <div class="text-center">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarDiagnostico">Agregar Diagnóstico</a>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Paciente</th>
                                    <th>Diagnóstico</th>
                                    <th>Tratamiento</th>
                                    <th>Fecha de Cita</th>
                                    <th>Hora de Cita</th>
                                    <th>Resultados</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12/05/2022</td>
                                    <td>Juan Pérez</td>
                                    <td>Glaucoma</td>
                                    <td>Estética Oculares</td>
                                    <td>15/05/2022</td>

                                    <td>10:00 AM</td>
                                    <td>
                                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalResultados">Resultados</a>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Acciones
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                                <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- MODALES -->
                    <!-- Modal Agregar Diagnóstico -->
                    <div class="modal fade" id="modalAgregarDiagnostico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Diagnóstico</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label for="inputPaciente" class="form-label">Paciente</label>
                                            <input type="text" class="form-control" id="inputPaciente" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputDiagnostico" class="form-label">Diagnóstico</label>
                                            <input type="text" class="form-control" id="inputDiagnostico" required>

                                        </div>
                                        <div class="mb-3">
                                            <label for="inputTratamiento" class="form-label">Tratamiento</label>
                                            <input type="text" class="form-control" id="inputTratamiento" required>

                                        </div>
                                        <div class="mb-3">
                                            <label for="inputFechaCita" class="form-label">Fecha de Cita</label>
                                            <input type="date" class="form-control" id="inputFechaCita" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputHoraCita" class="form-label">Hora de Cita</label>
                                            <input type="time" class="form-control" id="inputHoraCita" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputResultados" class="form-label">Resultados</label>
                                            <textarea class="form-control" id="inputResultados" rows="3" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputObservaciones" class="form-label">Observaciones</label>
                                            <textarea class="form-control" id="inputObservaciones" rows="3" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                    </form>
                                </div>
                            </div>


                        </div>


                    </div>
                    <!-- modal de Resultados -->
                    <div class="modal fade" id="modalResultados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Resultados</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Resultados</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lacus vel ipsum tincidunt posuere vel in metus. Donec facilisis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque. Donec sagittis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque.</p>
                                            <h3>Observaciones</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lacus vel ipsum tincidunt posuere vel in metus. Donec facilisis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque. Donec sagittis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque.</p>
                                            <h3>Diagnóstico</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lacus vel ipsum tincidunt posuere vel in metus. Donec facilisis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque. Donec sagittis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque.</p>
                                            <h3>Tratamiento</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in lacus vel ipsum tincidunt posuere vel in metus. Donec facilisis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque. Donec sagittis, mauris vel consectetur pretium, lectus felis dignissim velit, et tincidunt arcu ligula eu neque.</p>

                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>


                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>



                    <?php require_once('./components/script.php') ?>

</body>

</html>