
function cargarUsuarios() {

    let dato = new FormData();
    dato.append('accion', 'cargar');
    let xhr = new XMLHttpRequest();
    xhr.open('POST', './php/usuarios.php', true);

    xhr.addEventListener('load',()=>{
        let tablaUsuario = document.getElementById('tablaUsuarios');
        let respuesta = JSON.parse(xhr.response);
        
        tablaUsuario.innerHTML = '';
        for (let usuario of respuesta) {

            let estadoClase = usuario.estado === 'Inactivo' ? 'bg-danger' : 'bg-success';
        
            tablaUsuario.innerHTML += `
                <tr>
                    <td>${usuario.cod_usuario}</td>
                    <td>${usuario.correo}</td>
                    <td>${usuario.propietario}</td>
                    <td><span class="badge bg-primary">${usuario.rol}</span></td>
                    <td><span class="badge ${estadoClase}">${usuario.estado}</span></td>
                    <td>
                        <div class="form-check form-switch d-flex justify-content-center">
                            <input class="form-check-input" type="checkbox" item="${usuario.cod_usuario}" id="estadoUsuario" ${usuario.estado === 'Activo' ? 'checked' : ''}>
                        </div>
                    </td>
                </tr>
            `;
        }

        // Evento para cambiar el estado del usuario
        document.getElementById('tablaUsuarios').addEventListener('change', (e)=>{
            if(e.target.id === 'estadoUsuario'){
                let dato = new FormData();
                dato.append('accion', 'cambiarEstado');
                dato.append('cod_usuario', e.target.getAttribute('item'));
                dato.append('estado', e.target.checked? 'Activo' : 'Inactivo');
                
                let xhr = new XMLHttpRequest();
                xhr.open('POST', './php/usuarios.php', true);
                xhr.addEventListener('load',()=>{
                    cargarUsuarios();
                });
                xhr.send(dato);
            }
        });


        
    });
    xhr.send(dato);

    
}

cargarUsuarios();