<tr>
		<th>ID</th>
		<th>Nama Siswa</th>
		<th>Email</th>
		<th>No. Hp</th>
		<th>Status</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from mhs where nama like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from mhs");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['email']; ?></td>x
		<td><?php echo $d['no_hp']; ?></td>
		<td><?php echo $d['status']; ?></td>
	</tr>
	<?php } ?>
</table>








