<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mendapatkan data penjualan
$sql = "SELECT id_produk, SUM(jumlah_produk) AS jumlah_terjual FROM penjualan GROUP BY id_produk";
$result = $conn->query($sql);

$produk = [];
$jumlah_terjual = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $produk[] = $row['id_produk'];
        $jumlah_terjual[] = $row['jumlah_terjual'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chart Penjualan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="penjualanChart"></canvas>
    <script>
        const ctx = document.getElementById('penjualanChart').getContext('2d');
        const penjualanChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($produk); ?>,
                datasets: [{
                    label: 'Jumlah Terjual',
                    data: <?php echo json_encode($jumlah_terjual); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
</html>
