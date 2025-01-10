<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enfermero</title>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body class="d-flex">

<div class="sidebar d-none d-sm-none d-md-none d-lg-block">
        <div class="logo w-100 d-flex justify-content-center flex-column align-items-center pt-2 mb-3">
            <img src="./img/logoClinica2.png" width="80px" alt="logo">
            <p class="text-white h4">CLINICA</p>
            <p class="text-white h4">Bienestar</p>
        </div>

        <div class="menu w-100 d-flex justify-content-center">
            <ul class="list-unstyled">
                <li><a class=" btn" href="#">Inicio</a></li>
                <li><a class=" btn" href="#">Historial del Paciente</a></li>
                <li><a class=" btn" href="#">Mis Pacientes</a></li>    
            </ul> 
        </div>        
</div>

<div class="container bg-danger">
    <div class="container-fluid mt-2 bg-info d-flex justify-content-end">
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
    <div class="container-fluid bg-primary d-flex justify-content-around mt-2">
        <div class="d-flex justify-content-center m-3 bg-danger" style="width:300px; height:150px ;">
            <h4>Pacientes Ingresados</h4>
        </div>
        <div class="d-flex justify-content-center m-3 bg-danger" style="width:300px; height:150px ;">
            <h4>Total de Farmacos</h4>
        </div>
        <div class="d-flex justify-content-center m-3 bg-danger" style="width:300px; height:150px ;">
            <h4>Pacientes Atendidos</h4>
        </div>
    </div>
</div>

<script src="../"></script>
</body>
</html>