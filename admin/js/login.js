let login = document.getElementById('login');

login.addEventListener('submit', (e)=>{
    e.preventDefault();
    let datos = new FormData(login);
    let xhr = new XMLHttpRequest();
    xhr.open('POST', './php/login.php', true);

    xhr.addEventListener('load', (e)=>{
        let respuesta = xhr.response;

        console.log(respuesta);
        

        if (respuesta == 1) {
            window.location.href = './administrador/dashboard.php';
        } 
        else if (respuesta == 2) {
            window.location.href = './doctor/dashboard.php';
        } 
        else if (respuesta == 3) {
            window.location.href = './recepcionista/index.php';
        } 
        else if (respuesta == 102) {
            //sweetalert2 de cuenta deshabilitada
            Swal.fire({
                title: 'Su cuenta está deshabilitada',
                text: 'Por favor pongase en contacto con el administrador',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
        

    })

    xhr.send(datos);

});