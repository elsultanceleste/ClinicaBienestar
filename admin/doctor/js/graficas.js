const ctx = document.getElementById('myChart').getContext('2d');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Pacientes Atendidos',
            data: [45, 50, 60, 40, 70, 55, 65, 80, 75, 90, 85, 95],
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

const ctx2 = document.getElementById('myChartpie').getContext('2d');

        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Consulta', 'Analisis', 'Revision'],
                datasets: [{
                    data: [40, 35, 25], // Datos de ejemplo
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
