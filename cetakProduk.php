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
 <h4>LAPORAN DAFTAR PRODUK
 <br></h4></center>
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID Produk</th>
			<th>Nama Produk</th>
			<th>Harga Produk</th>
			<th>Deskripsi Produk</th>
			<th>Tanggal Expired</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from produk");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['ID_Product']; ?></td>
			<td><?php echo $data['NamaProduk']; ?></td>
			<td><?php echo $data['Harga']; ?></td>
			<td><?php echo $data['Deskripsi']; ?></td>
			<td><?php echo $data['Expired']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>