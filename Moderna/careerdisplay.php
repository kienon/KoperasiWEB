	<div class="portfolio">	
	<div class="container">
    <div class="row">
	<?php

$result = mysqli_query($conn,"SELECT * FROM jawatan");
if(mysqli_num_rows($result) > 0){

    while($row= $result->fetch_assoc()):
		$jawatan = $row['job'];
		$oview = $row['overview'];
		$resp = $row['responsibilities'];
		$req = $row['requirements'];
		$ctgy = $row['category'];
		$loca = $row['location'];
		$slry = $row['salary'];
		$date = $row['date'];
		$myId = $row['id'];
		?>
	
	<div class="col-lg-6 col-md-6 p-2">
		<!-- Card -->
		<div class="card bg-light text-dark ">
			<h3 class="card-title "><?php echo ucwords($row['job']) ?></h3>
			<div class="card-body stuck">
				<p><b>Tarikh Tutup : </b><?php echo $date; ?></p>
				<p class="text-left"><b><i class="bi bi-geo-alt-fill"></i></b> <?php echo $loca; ?></p>
				<p class="text-left"><b>Gambaran Keseluruhan Kerja :</b> <?php echo $oview; ?></p>
				<p class="text-left"><b>Tanggungjawab :</b> <?php echo $resp; ?></p>
				<p class="text-left"><b>Syarat Permohonan :</b> <?php echo $req; ?></p>
				<p class="text-left"><b>Kategori :</b>
				<?php 
						switch ($ctgy) {
							case '1':
								echo "<span> Eksekutif</span>";
								break;
							case '2':
								echo "<span> Sepenuh Masa</span>";
								break;
							case '3':
								echo "<span>Sambilan</span>";
								break;
							case '4':
								echo "<span> Kerja Dari Rumah</span>";
								break;                 
							default:
								echo "<span class=''>Tidak ditetapkan</span>";
								break;
						}
						?></p>
				<p class="text-left"><b><i class="bi bi-currency-dollar"></i></b> <?php echo $slry; ?></p>
				<p>Permohonan boleh dilakukan melalui emel <a href="mailto: hr@fedborong.com.my" >hr@fedborong.com.my</a></p>
			</div>
		</div> 
	<!-- End Card-->
	</div>
	  <?php endwhile; mysqli_close($conn);
		} else {
			echo "Jawatan kosong belum dikemaskini, sila cuba sebentar lagi.";
		}
			
				
		?>
    </div>
	</div>
  </div>
  <br>
  