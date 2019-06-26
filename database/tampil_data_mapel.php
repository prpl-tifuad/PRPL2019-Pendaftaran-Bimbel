	<?php 
		include 'config.php';
		
	if(isset($_GET['carimapel'])){
		$carimapel = $_GET['carimapel'];

		echo "<p> Mencari Data : ";
		echo "$cari";
		echo "</p>";

		$data = mysqli_query($koneksi, "select pilihmapel.email as email, siswa.nama as nama from pilihmapel join siswa on pilihmapel.email = siswa.email  group by email where siswa.email like '%".$carimapel."%'");				
	}else{
		$data = mysqli_query($koneksi, "select pilihmapel.email as email, siswa.nama as nama from pilihmapel join siswa on pilihmapel.email = siswa.email  group by email");		
	}
	if(mysqli_num_rows($data) > 0)
	{
	 ?>

	<tr class="thead-dark">
		<th>Nama Siswa</th>
		<th>Email</th>
		<th>Detail kelas</th>
	</tr>
	<?php
	
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><a href="?detail=<?php echo $d['email']; ?>"><button class="btn btn-primary">Detail</button></a></td>
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