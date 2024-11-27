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

// Query untuk mendapatkan data produk
$sql = "SELECT NamaProduk, Harga, Expired FROM produk";
$result = $conn->query($sql);

$produk = [];
$harga = [];
$expired = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $produk[] = $row['NamaProduk'];
        $harga[] = $row['Harga'];
        $expired[] = $row['Expired'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chart Produk</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="produkChart"></canvas>
    <script>
        const ctx = document.getElementById('produkChart').getContext('2d');
        const produkChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($produk); ?>,
                datasets: [{
                    label: 'Harga',
                    data: <?php echo json_encode($harga); ?>,
                    borderColor: 'rgba(153, 102, 255, 1)',
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
