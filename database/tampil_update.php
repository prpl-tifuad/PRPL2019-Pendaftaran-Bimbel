	<?php 
		include 'config.php';
		
	if(isset($_GET['editid'])){
		$id = $_GET['editid'];
		$email = $_GET['email'];

		$data = mysqli_query($koneksi, "select pilihmapel.id as id, pilihmapel.email as email, pilihmapel.kelas as kelas, pilihmapel.status as status, matapelajaran.NamaMapel as namamapel, siswa.nama as nama from pilihmapel join siswa on pilihmapel.email = siswa.email join matapelajaran on pilihmapel.id = matapelajaran.id where pilihmapel.id = '$id' and pilihmapel.email = '$email'");				
	}else{
		redirect('./index.php');
	}
	if(mysqli_num_rows($data) > 0)
	{
	 ?>
	<form action="./control/proses_update.php" method="post">
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
				<td><input type="text" value="<?= $d['id']; ?>" name="id" hidden>
					<?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?><input type="text" value="<?= $d['email']; ?>" name="email" hidden></td>
				<td><?php echo $d['kelas']; ?></td>
				<td><?php echo $d['namamapel']; ?></td>
				<td>
					<select name="status" id="status" class="form-control">
						<?php if ($d['status'] == "Pending") {
							?>
							<option value="Pending" selected="selected">Pending</option>
							<option value="Sukses">Sukses</option>
						<?php
						} ?>
						<?php if ($d['status'] == "Sukses") {
							?>
							<option value="Sukses" selected="selected">Sukses</option>
							<option value="Pending">Pending</option>
						<?php
						} ?>
					</select>
				</td>
				<td><button type="submit" class="btn btn-primary">Update</button>
			</tr>
	</form>
	<?php } 
	}
	?>