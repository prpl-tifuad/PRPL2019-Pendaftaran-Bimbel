	<?php 
		include '../database/config.php';
		$email = $_SESSION['email'];
		$data = mysqli_query($koneksi, "select matapelajaran.NamaMapel, pilihmapel.kelas, pilihmapel.Status, pilihmapel.Biaya from matapelajaran join pilihmapel
			on matapelajaran.Id = pilihmapel.id where pilihmapel.email = '$email' AND pilihmapel.Status= 'Sukses'");				
	 ?>
   <?php 
    if(mysqli_num_rows($data)>0)
    { 
      $totalbiaya=0;
      ?>
      <div class="row">
                    <div class="col">
                      <h5 style="margin: 10px 0px 10px 0px; padding: 10px 0px">Kelas sukses diikuti</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">

        <table class="table table-bordered">
          <thead>
            <tr class="table-primary">
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Kelas</th>
              <th scope="col">Status</th>
              <th scope="col">Biaya</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <td><?php echo $d['NamaMapel']; ?></td>
              <td><?php echo $d['kelas']; ?></td>
              <td><p style="color: green;font-weight: bold"><?php echo $d['Status']; ?></p></td>
              <td><?php echo $d['Biaya']; ?></td>
            </tr>

          <?php 
          
          $totalbiaya += $d['Biaya'];
           }
          ?>
          </tbody>
        </table>
                              </div>
                  </div>
    <?php 
    }else{
     
    }
    ?>

	
</table>