<!DOCTYPE html>
<html>
	<head>
		<title>Flower House | Home</title>
		<link rel="stylesheet" href="css/flowerhousecss.css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		</head>
		<div class="top-bar"></div>
	<body>
		<div id="layout-container">
			<div id="header-container">
				<div class="logo-container"></div>
				<div class="nav-container">
					<ul class="list-clean list-left nav-list">
						<li><a href="index.php">Home</a></li>
						<li><class="special-color"><a href="index.php">Flower Collection</a></li>
						<li><a href="index.php"><img src="img/phone.png">(949) 300 2565</a></li>
					</ul>
				</div>
			</div>
			<div id="content-container">
				<div class="gallery"></div>
			</div>
		</div>
		<div class="footer-text" id="footer-container">
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
		
		$(function(){
			slider-container = $('#gallery');
			for(var i=0;i<images.length;i++){
				var row = images[i];
				var class_name = 'slider-img slider-right';
					if(i == 0){
						class_name = 'slider-img';
					}
				var img = $('<img>')
					.attr('src', row)
					.addClass(class_name);
				slider_container.append(img);
			}
		});
	</script>
</html>