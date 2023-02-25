<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
<body>
	<div class="float-left">
        <a href="index.php" class="btn btn-info"><i class="fa fa-backward"></i> Back </a>
    </div>
  	<div class="container">
		<div id='result' class="row mt-5">
			<?php 
				$word = $_GET['search'];
				$url = "https://pixabay.com/api/?key=33513386-f32dd1c80790a5c0fb879c517&q=".$word."&image_type=photo&pretty=true";
				// Initialize a CURL session.
				$ch = curl_init();
				
				// Return Page contents.
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				
				//grab URL and pass it to the variable.
				curl_setopt($ch, CURLOPT_URL, $url);
	
				$result = curl_exec($ch);
				if($result){
					$res = json_decode($result); 
					$count = count($res->hits);
					for($x = 0; $x < $count; $x++) {
			?>	
					<div class="col-sm-4"> 
						<img src="<?php echo $res->hits[$x]->webformatURL ?>" width="100%">
					</div>	
			<?php
					}
				}
				curl_close( $ch );
			?>
		</div>
	</div>
</body>
 
</html>

