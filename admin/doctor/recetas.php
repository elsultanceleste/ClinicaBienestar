<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
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
                <div class="d-flex justify-content-around">
                    <h2 class="text-center">Recetas</h2>

                    <div class="text-center">
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarReceta">AGREGAR RECETA</a>
                    </div>
                </div>
                <!-- TABLA DE RECETAS -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Paciente</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Fecha</th>
                                <th scope="col" class="d-flex justify-content-center" colspan="2"> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Juan Perez</td>
                                <td>Dr. Juan Perez</td>
                                <td>2022-01-15</td>

                                <td class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#verReceta">Ver receta</a>
                                    <a href="" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                </td>


                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Maria Martinez</td>
                                <td>Dr. Maria Martinez</td>
                                <td>2022-01-12</td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-secondary ">Ver receta</a>
                                    <a href="" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Pedro Garcia</td>
                                <td>Dr. Pedro Garcia</td>
                                <td>2022-01-09</td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-secondary ">Ver receta</a>
                                    <a href="" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>Ana Rodriguez</td>
                                <td>Dr. Ana Rodriguez</td>
                                <td>2022-01-06</td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="#" class="btn btn-secondary ">Ver receta</a>
                                    <a href="" class="btn btn-primary"><i class="fa-solid fa-file-pdf"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Modal AGREGAR RECETA -->
                    <div class="modal fade" id="agregarReceta" tabindex="-1" aria-labelledby="agregarRecetaLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="agregarRecetaLabel">Agregar receta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                    <!-- Formulario para agregar receta -->
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Paciente</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese el nombre del paciente">

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Doctor</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Ingrese el nombre del doctor">

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Receta</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ingrese la receta"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">Diagnostico</label>
                                            <select class="form-select" id="exampleFormControlSelect1">
                                                <option selected>Seleccione un diagnostico</option>
                                                <option value="1">Diagnostico 1</option>
                                                <option value="2">Diagnostico 2</option>
                                                <option value="3">Diagnostico 3</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Agregar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal VER RECETA -->

                    <div class="modal fade" id="verReceta" tabindex="-1" aria-labelledby="verRecetaLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="verRecetaLabel">Receta</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Receta -->
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Paciente</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="Juan Perez" disabled>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Doctor</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput2" value="Dr. Juan Perez" disabled>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Receta</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>Receta medicamentos para la enfermedad de Parkinson</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Diagnostico</label>
                                        <input type="text" class="form-control" id="exampleFormControlSelect1" value="Enfermedad de Parkinson" disabled>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>

        </div>


        <?php require_once('./components/script.php') ?>

</body>

</html>