import './bootstrap';
import '../css/app.css';
import { Chart, registerables } from 'chart.js';

Chart.register(...registerables);

const ctx = document.getElementById('uptimeChart').getContext('2d');

const gradient = ctx.createLinearGradient(0, 0, 0, 200);
gradient.addColorStop(0, 'rgba(139, 92, 246, 0.6)');
gradient.addColorStop(0.5, 'rgba(139, 92, 246, 0.3)');
gradient.addColorStop(1, 'rgba(139, 92, 246, 0)');

const uptimeChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
        datasets: [{
            data: [30, 25, 35, 20, 40, 35, 50, 45, 55, 50, 45, 40, 50, 45, 55, 50, 60, 55, 50, 45],
            borderColor: '#8b5cf6',
            backgroundColor: gradient,
            fill: true,
            tension: 0.4,
            borderWidth: 2,
            pointRadius: 0,
            pointHoverRadius: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        interaction: {
            intersect: false,
            mode: 'index'
        },
        scales: {
            y: {
                display: false,
                beginAtZero: true,
                max: 100
            },
            x: {
                display: false,
                grid: {
                    display: false
                }
            }
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                enabled: false
            }
        }
    }
});