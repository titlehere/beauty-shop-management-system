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

// Query untuk mendapatkan data pembayaran pengiriman
$sql = "SELECT tanggal_pembayaran, SUM(jumlah_pembayaran) AS total_pembayaran FROM pembayaran_pengiriman GROUP BY tanggal_pembayaran";
$result = $conn->query($sql);

$tanggal = [];
$total_pembayaran = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tanggal[] = $row['tanggal_pembayaran'];
        $total_pembayaran[] = $row['total_pembayaran'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chart Pembayaran Pengiriman</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="pembayaranPengirimanChart"></canvas>
    <script>
        const ctx = document.getElementById('pembayaranPengirimanChart').getContext('2d');
        const pembayaranPengirimanChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($tanggal); ?>,
                datasets: [{
                    label: 'Total Pembayaran',
                    data: <?php echo json_encode($total_pembayaran); ?>,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
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
