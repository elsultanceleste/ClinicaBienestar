<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
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
            <p class="h4 w-100 text-center">CITAS</p>

            <div class="col-12 mb-5">
                <a  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Nueva cita</a>
            </div>

            <div class="table-responsive ">
            <table class="table table-striped-columns table-success">
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



        <!-- ASIDE-RESPONSIVE -->

        <?php include './components/sidebarResponsive.php'; ?>

            
        <!-- FOOTER -->
        <?php require( './components/footer.php'); ?>


    </div>    
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar cita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="paciente" class="form-label">Nombre del paciente</label>
                    <input type="text" class="form-control" id="paciente" name="paciente">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos del paciente</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                </div>
                <div class="mb-3">
                    <label for="medico" class="form-label">Medico</label>
                    <select name="medico" id="" class="form-control">
                        <option value="">Selecionar doctor</option>
                        <option value="" name="">Doctor1</option>
                        <option value="" name="">Doctor2</option>
                        <option value="" name="">Doctor3</option>
                        <option value="" name="">Doctor4</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" class="form-control" id="hora" name="hora">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <textarea name="descripcion" class="form-control" id="descripcion"></textarea>
                </div>
                
            </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn guardar" >Agregar cita</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cerrar</button>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>