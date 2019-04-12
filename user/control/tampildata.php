	<?php 
		include '../database/config.php';
		$email = $_SESSION['email'];
		$data = mysqli_query($koneksi, "select matapelajaran.NamaMapel, pilihmapel.kelas from matapelajaran join pilihmapel
			on matapelajaran.Id = pilihmapel.id where pilihmapel.email = '$email'");				
	 ?>
   <?php 
    if(mysqli_num_rows($data)>0)
    { 
      ?>
      <div class="row">
                    <div class="col">
                      <h5 style="margin: 10px 0px 10px 0px; padding: 10px 0px">Daftar Kelas yang diikuti</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">

        <table class="table table-bordered">
          <thead>
            <tr class="table-primary">
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Kelas</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <td><?php echo $d['NamaMapel']; ?></td>
              <td><?php echo $d['kelas']; ?></td>
            </tr>
          <?php }
          ?>
          </tbody>
                              </div>
                  </div>
    <?php 
    }else{
      echo "<h5 style='text-align:center;'>Anda Tidak Mengikuti Kelas Apapun</h5>";
     
    }
    ?>

	
</table>