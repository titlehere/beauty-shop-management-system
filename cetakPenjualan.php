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
 <h4>LAPORAN DAFTAR PENJUALAN
 <br></h4></center>
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID Penjualan</th>
			<th>Tanggal Penjualan</th>
			<th>ID Produk</th>
			<th>Jumlah Produk</th>
			<th>Total Harga</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from penjualan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_penjualan']; ?></td>
			<td><?php echo $data['tgl_penjualan']; ?></td>
			<td><?php echo $data['id_produk']; ?></td>
			<td><?php echo $data['jumlah_produk']; ?></td>
			<td><?php echo $data['total_harga']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>