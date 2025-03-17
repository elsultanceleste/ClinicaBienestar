<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente</title>
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
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Pacientes</h1>
                    </div>

                    <div class="col-12">
                        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                            <table class="table table-striped table-hover">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Edad</th>
                                        <th scope="col">Sexo</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalHistorial"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr> <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr> <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr> <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr> <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr> <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr> <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>30</td>
                                        <td>Hombre</td>
                                        <td>123 Main St</td>
                                        <td>555-123-4567</td>
                                        <td>
                                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Historial">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-book-medical"></i></a>
                                            </span>
                                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- modal para ver Historial del paciente  -->
                     <div class="modal fade" id="modalHistorial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Historial del Paciente</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Aquí irá el contenido del modal -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Diagnóstico</th>
                                                <th scope="col">Medicamentos</th>
                                                <th scope="col">Tratamiento</th>
                                                <th scope="col">Receta</th>

                                                </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12/02/2022</td>
                                                <td>Catarata</td>
                                                <td>Paracetamol, ibuprofeno</td>
                                                <td>Tratamiento de catarata</td>
                                                <td><a href="#" class="btn btn-primary btn-sm">Descargar</a></td>
                                            </tr>
                                            <tr>
                                                <td>10/01/2022</td>
                                                <td>Gripe</td>
                                                <td>Amoxicilina, clavulanica</td>
                                                <td>Tratamiento de gripe</td>
                                                <td><a href="#" class="btn btn-primary btn-sm">Descargar</a></td>
                                            </tr>



                                            <tr>
                                                <td>08/12/2021</td>
                                                <td>Dengue</td>
                                                <td>Rifampicina, zanamivir</td>
                                                <td>Tratamiento de dengue</td>
                                                <td><a href="#" class="btn btn-primary btn-sm">Descargar</a></td>
                                            </tr>
                                        
                                        </tbody>

                </div>
            </div>
        </div>
    </div>
    </div>

    <?php require_once('./components/script.php') ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });
        });
    </script>
    </script>

</body>

</html>