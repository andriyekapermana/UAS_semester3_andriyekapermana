<?php
include('koneksi.php');
$tampil_barang = mysql_query("select br.kategori_id, br.nama_barang, stn.nama_satuan, qty, harga, qty*harga as total 
from transaksi as tr
inner join barang as br 
on tr.id_transaksi=br.id_barang 
inner join satuan as stn 
on br.id_barang=stn.id_satuan
");
?>
<h1>Tampil Transaksi</h1>
<table border="1">
	<tr>
		<td>Kategori</td>
		<td>Nama barang</td>
		<td>satuan</td>
		<td>Quantity</td>
		<td>Harga</td>
		<td>Total</td>
	</tr>
<?php while($data = mysql_fetch_array($tampil_barang)) { ?>
	<tr>
		<td><?php echo $data['kategori_id']; ?></td>
		<td><?php echo $data['nama_barang']; ?></td>
		<td><?php echo $data['nama_satuan']; ?></td>
		<td><?php echo $data['qty']; ?></td>
		<td><?php echo $data['harga']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
<?php } ?>
</table>
<a href="menu.php">Menu Utama</a>
