<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.css">
	<title></title>
</head>
<body>
	<div class="ui container">
		<h1>Computer science figures</h1>
		<div class="ui three column grid">
			<?php 
			$i = fopen("cs_figures.csv", 'r');
			while (!feof($i) ) {
				$n[] = fgetcsv($i);
			}
			fclose($i);
			for($p=1;$p<8;$p++){ 

				?>
				<div class="column">
					<div class="ui fluid card">
						<div class="image">
							<img src=<?php echo $n[$p][5];?>>
						</div>
						<div class="content">
							<a class="header"><?php echo $n[$p][0]; ?></a>
							<div class="meta">
								<span class="date"><?php echo $n[$p][2]; ?></span>
							</div>
							<div class="description">
								<?php echo $n[$p][3]; ?>
							</div>
						</div>
						<div class="ui right aligned extra content">
							<a>
								<?php echo "Born in".$n[$p][1] ?>
							</a>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.3.3/dist/semantic.min.js"></script>
</body>
</html>