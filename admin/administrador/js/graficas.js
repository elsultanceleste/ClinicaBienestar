
const ctx2 = document.getElementById('myChartpie').getContext('2d');

        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Pacientes registrados', 'Pacientes Sin cuenta'],
                datasets: [{
                    data: [40,60], // Datos de ejemplo
                    backgroundColor: ['#006131FF', '#417b61'],
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
