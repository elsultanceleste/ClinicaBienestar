
let id_medico = document.getElementById('id_medico').value;

function  graficaAtendidos(id_medico) {
    let datos = new  FormData();
    datos.append("id_medico", id_medico);
    datos.append("accion","antendidos");
    let xhr = new XMLHttpRequest();
    xhr.open('POST', './php/graficaPaciente.php', true);
    xhr.addEventListener('load', ()=>{
        
        let respuesta = JSON.parse(xhr.response);
        
        const meses = respuesta.map(dato=> dato.mes);
        const total = respuesta.map(dato=> dato.total);
        const ctx = document.getElementById('myChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: meses,
                datasets: [{
                    label: 'Pacientes Atendidos',
                    data: total,
                    borderColor: '#417b61',
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    borderWidth: 2,
                    pointBackgroundColor: '#417b61',
                    pointRadius: 5,
                    pointHoverRadius: 10, // Aumenta el tamaño al hacer hover
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 1500, // Animación inicial
                    easing: 'easeOutBounce'
                },
                hover: {
                    mode: 'nearest',
                    intersect: true,
                    animationDuration: 400 // Animación al hacer hover
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { font: { size: 12 }, color: '#666' }
                    },
                    x: {
                        ticks: { font: { size: 12 }, color: '#666' }
                    }
                },
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            }
        });

        
        

    });

    xhr.send(datos);
    
}

function citas(id_medico) {

    let datos = new  FormData();
    datos.append("id_medico", id_medico);
    datos.append("accion","citas");
    let xhr = new XMLHttpRequest();
    xhr.open('POST', './php/graficaPaciente.php', true);
    xhr.addEventListener('load', ()=>{
        
        let respuesta = JSON.parse(xhr.response);
        
        const tipo = respuesta.map(dato=> dato.tipo);
        const total = respuesta.map(dato=> dato.cantidad);
        const ctx2 = document.getElementById('myChartpie').getContext('2d');
        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: tipo,
                datasets: [{
                    data: total, // Datos de ejemplo
                    backgroundColor: ['#007bff', '#417b61', '#ffc107'],
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: { size: 14 },
                            color: '#333'
                        }
                    }
                }
            }
        });
    });
    xhr.send(datos);
    
}
graficaAtendidos(id_medico);
citas(id_medico);


       
