<?php include 'db_connect.php' ?>

<?php

$result = mysqli_query($conn,"SELECT * FROM jawatan");
		while($row= $result->fetch_assoc()):
		$jawatan = $row['job'];
		$oview = $row['overview'];
		$resp = $row['responsibilities'];
		$req = $row['requirements'];
		$date = $row['date'];
		$myId = $row['id'];
		
?>
		
	<div class=" ">
    <div class="card">
	<h3 class="card-header"><?php echo ucwords($row['job']) ?></h3>
      <div class="card-body">
	  
		<p><b>Tarikh Tutup : </b><a class=""><?php echo $date; ?></a></p>
		<p class="text-left"><b>Maklumat Jawatan :</b> <?php echo $oview; ?></p>
		<p class="text-left"><b>Tanggungjawab :</b> <?php echo $resp; ?></p>
		<p class="text-left"><b>Syarat Permohonan :</b> <?php echo $req; ?></p>
        <a href = "mailto: hr@fedborong.com" class="btn btn-primary">Apply Now</a>
      </div>
    </div>
  </div>
		<?php endwhile; mysqli_close($conn); ?>
