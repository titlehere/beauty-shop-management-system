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
 <h4>LAPORAN DAFTAR PELANGGAN
 <br></h4></center>
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>ID Pelanggan</th>
			<th>Nama Pelanggan</th>
			<th>Telepon Pelanggan Produk</th>
			<th>Alamat Pelanggan Produk</th>
			<th>Tanggal Pembelian</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pelanggan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['ID_pelanggan']; ?></td>
			<td><?php echo $data['nama_pelanggan']; ?></td>
			<td><?php echo $data['telp_pelanggan']; ?></td>
			<td><?php echo $data['alamat_pelanggan']; ?></td>
			<td><?php echo $data['tanggal_pembelian']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>