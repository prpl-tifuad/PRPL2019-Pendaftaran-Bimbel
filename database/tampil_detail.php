	<?php 
		include 'config.php';
		
	if(isset($_GET['detail'])){
		$cari = $_GET['detail'];

		echo "<p> Detail kelas : ";
		echo "$cari";
		echo "</p>";

		$data = mysqli_query($koneksi, "select pilihmapel.id as id, pilihmapel.email as email, pilihmapel.kelas as kelas, pilihmapel.status as status, matapelajaran.NamaMapel as namamapel, siswa.nama as nama from pilihmapel join siswa on pilihmapel.email = siswa.email join matapelajaran on pilihmapel.id = matapelajaran.id where siswa.email like '%".$cari."%'");				
	}else{
		redirect('./index.php');
	}
	if(mysqli_num_rows($data) > 0)
	{
	 ?>

	<tr class="thead-dark">
		<th>Nama Siswa</th>
		<th>Email</th>
		<th>Kelas</th>
		<th>Mapel</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	<?php
	
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['kelas']; ?></td>
			<td><?php echo $d['namamapel']; ?></td>
			<td><?php echo $d['status']; ?></td>
			<td><a href="./aksi/deletePilihMapel?id=<?php echo $d['email']; ?>"><button class="btn btn-primary">Edit</button></a>
			<a href="./aksi/deletePilihMapel?id=<?php echo $d['id'];?>&email=<?php echo $d['email'];?>"><button class="btn btn-primary">Delete</button></a></td>
		</tr>
	<?php } 
	}
	?>