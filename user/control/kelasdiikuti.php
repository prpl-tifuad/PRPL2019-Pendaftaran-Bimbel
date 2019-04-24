	<?php 
		include '../database/config.php';
    echo "<h5>Total Kelas</h5>";
		$email = $_SESSION['email'];
		$data = mysqli_query($koneksi, "select * from pilihmapel where pilihmapel.email = '$email'");	
    $count = mysqli_num_rows($data);
    echo "<i class='fas fa-landmark logojml'></i><b><span class='angka'>$count </b></span>";
       ?>