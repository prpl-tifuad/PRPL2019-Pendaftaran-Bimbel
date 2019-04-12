	<?php 
		include 'config.php';
		
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];

		echo "<p> Mencari Data : ";
		echo "$cari";
		echo "</p>";

		$data = mysqli_query($koneksi, "select * from siswa where nama like '%".$cari."%'
			or id like '%".$cari."%'");				
	}else{
		$data = mysqli_query($koneksi, "select * from siswa");		
	}
	 ?>
	<tr class="thead-dark">\
		<th>Nama Siswa</th>
		<th>Email</th>
		<th>No. Hp</th>
		<th>Status</th>
	</tr>
	<?php 
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['email']; ?></td>
		<td><?php echo $d['no_hp']; ?></td>
		<td><?php echo $d['status']; ?></td>
	</tr>
	<?php } 
	?>








