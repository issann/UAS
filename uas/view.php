<?php
error_reporting(E_ALL);
include('koneksi.php');
// include('login_session.php');
$title = 'Data Barang';
$id=$_GET['id'];
$sql =" SELECT * From barang WHERE id_barang = '{$id}' ";
$result = mysqli_query($conn, $sql);
if (!$result)die('Error:Data Tidak Tersedia');
	$data = mysqli_fetch_array($result);

function is_select($var, $val) {
	if($var == $val ) return 'selected="selected"';
	return false;
}
include ('header.php');
?>
<div class="content_b">
	<div class="main">
		<table>
			<tr>
				<th>Gambar</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Deskrisi</th>
			</tr>
			<tr>
				<td><?php echo "<img src=\"{$data['gambar']}\" />"; ?></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td class="right"><?php echo number_format($data['harga_jual'], 2, ',', '.');?></td>
				<td class="center"><?php echo $data['stok'];?></td>
				<td><?php echo $data['deskripsi'];?></td>
			</tr>
		</table>
	<hr/>
		<div class="daftar">
			<h3>Silahkan Order</h3>
			<hr> <br/>
			<p>
				Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Issanudin <br>
				No Tlp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 0812-9419-5664 <br>
				No rekening (BCA) &nbsp;&nbsp;&nbsp;&nbsp;: 030-002-1281 <br><br>
				a/n Issanudin <br>
			</p>
		</div>
	</div>
</div>

<?php
include_once('footer.php');
?>