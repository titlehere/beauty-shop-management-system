<?php 
	$host = "localhost";
$user = "root";
$password = "";
$database = "shop";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
 
if($koneksi->connect_error){
	die("Koneksi gagal");
}
	?>
	<center>
 <h4>LAPORAN DAFTAR PEMBAYARAN
 <br></h4></center>
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID Pembayaran</th>
			<th>ID Penjualan</th>
			<th>Tanggal Pembayaran</th>
			<th>Jumlah Pembayaran</th>
			<th>Metode Pembayaran</th>
            <th>Tanggal Pengiriman</th>
            <th>Status Pengiriman</th>
            <th>Alamat Pengiriman</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pembayaran_pengiriman");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['ID_pembayaran_pengiriman']; ?></td>
			<td><?php echo $data['ID_penjualan']; ?></td>
			<td><?php echo $data['tanggal_pembayaran']; ?></td>
			<td><?php echo $data['jumlah_pembayaran']; ?></td>
			<td><?php echo $data['metode_pembayaran']; ?></td>
            <td><?php echo $data['tanggal_pengiriman']; ?></td>
            <td><?php echo $data['status_pengiriman']; ?></td>
            <td><?php echo $data['alamat_pengiriman']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>