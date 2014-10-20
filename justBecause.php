<?php include'inc/constants.php';?>
<?php include'inc/database.php';?>
<?php
	global $db_link; //$db_link variable, which has been defined in the database.php
	$sql = "SELECT * FROM ".TBL_COLLECTIONS." ORDER BY 'id' ASC";
	$query = mysql_query($sql, $db_link) or die(mysql_error());
	$collections = array();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Flower House | Just Because</title>
		<link rel="stylesheet" href="css/flowerhousecss.css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		</head>
		<div class="top-bar"></div>
	<body>
		<div id="layout-container">
		<div id="header-container">
			<a href="index.php"><div class="logo-container"></div></a>
			<div class="nav-container">
				<ul class="list-clean list-left nav-list">
					<li><a href="index.php">Home</a></li>
					<li><class="special-color"><a href="index.php">Flower Collection</a></li>
					<li><a href="index.php"><img src="img/phone.png">(949) 300 2565</a></li>
				</ul>
			</div>
		</div>
			<div id="content-container">
				<div id="button-bar">
					<button id="button-left"><img src="img/left-arrow.png"/></button>
					<button id="button-right"><img src="img/right-arrow.png"/></button>
				</div>
				<div id="gallery"></div>
			</div>
		</div>
		<div class="footer-text" id="footer-container">
			<?php
				$dow_text = date('D');
				echo ($dow_text[1]);
			
			
			
			
			?>
			
			
			
			
			
			
			
			<p>Copyright  2014 FlowerHouse. All rights reserved | 234 Terry Francois St. San Francisco, CA 94158, info@flowerhouse.com | Mon-Fri: 7am-10pm, Sat-8am-10pm</p>
		</div>
	</body>
	<script>
		var images = [
			"img/2/just-because1.png",
			"img/2/just-because2.png",
			"img/2/just-because3.png",
			"img/2/just-because4.png",
			"img/2/just-because5.png",
			"img/2/just-because6.png"
		];
		
		var slider_container;
		
	</script>
	<script src="js/slider.js"></script>
</html>