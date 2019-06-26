	<?php 
		include 'config.php';
		
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];

		echo "<p> Mencari Data : ";
		echo "$cari";
		echo "</p>";

		$data = mysqli_query($koneksi, "select * from siswa where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($koneksi, "select * from siswa");		
	}
	if(mysqli_num_rows($data) > 0)
	{
	 ?>

	<tr class="thead-dark">
		<th>Nama Siswa</th>
		<th>Email</th>
		<th>No. Hp</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	<?php
	
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['no_hp']; ?></td>
			<td><?php echo $d['status']; ?></td>
			<td><a href="./aksi/deletesiswa?id=<?php echo $d['email']; ?>"><button class="btn btn-danger">Delete</button></a></td>
		</tr>
	<?php } 
	}else{
		?>
		<div class="alert alert-danger" role="alert">
		  Tidak ada data tersedia
		</div>
		<?php 
	}
	?>








