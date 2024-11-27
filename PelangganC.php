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

// Query untuk mendapatkan data pelanggan
$sql = "SELECT alamat_pelanggan, COUNT(*) AS jumlah_pelanggan FROM pelanggan GROUP BY alamat_pelanggan";
$result = $conn->query($sql);

$alamat = [];
$jumlah_pelanggan = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $alamat[] = $row['alamat_pelanggan'];
        $jumlah_pelanggan[] = $row['jumlah_pelanggan'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chart Pelanggan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="pelangganChart"></canvas>
    <script>
        const ctx = document.getElementById('pelangganChart').getContext('2d');
        const pelangganChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($alamat); ?>,
                datasets: [{
                    label: 'Jumlah Pelanggan',
                    data: <?php echo json_encode($jumlah_pelanggan); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
