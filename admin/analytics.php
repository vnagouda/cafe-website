<?php include '../includes/header.php'; ?>
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Sales Analytics</h1>
    <canvas id="salesChart" class="bg-white shadow rounded"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April'],
            datasets: [{
                label: 'Sales ($)',
                data: [1200, 1500, 1800, 2000],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?php include '../includes/footer.php'; ?>
