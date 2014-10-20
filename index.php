<?php include 'inc/constants.php'; ?>
<?php include 'inc/database.php'; ?>
<?php
	global $db_link;
	//$db_link variable, which has been defined in the database.php
	$sql = "SELECT * FROM " . TBL_COLLECTIONS . " ORDER BY 'id' ASC";
	$query = mysql_query($sql, $db_link) or die(mysql_error());
	$collections = array();
?>
<!DOCTYPE html>
<html>
	<head>
		<div class="top-bar"></div>
		<title>Flower House | Home</title>
		<link rel="stylesheet" href="css/flowerhousecss.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	</head>
	<body>
		<div id="layout-container">
			<?php include 'phpTemplates/headTemplate.php'; ?>
			<div id="content-container">
				<div id="button-bar">
					<button id="button-left"><img src="img/left-arrow.png"/>
					</button>
					<button id="button-right"><img src="img/right-arrow.png"/>
					</button>
				</div>
				<div id="gallery">
					
					</div>
				</div><!--double check ids-->
				<div class="text-content">
					<p>
						We offer a wide range of flower arrangements fit for any occasion. We specialize in traditional,
						modern, and extravagant flower designs. Flower House guarantees the most beautiful, elegant, and fresh flower
						arrangements in town! Give us a call and our friendly customer service representative will be there to answer
						your questions and/or take your order.
					</p>
				</div>
			</div>
		</div>
		<?php include 'phpTemplates/footerTemplate.php'; ?>
	</body>
	<script>
		var images = ["img/1/emotion1.png", "img/2/just-because1.png", "img/3/event1.png"];
		/*
		 var text = [
		 "<p>SHARE YOUR EMOTIONS<p>",
		 "<p>SEND FLOWERS JUST BECAUSE<P>",
		 "<p>MAKE YOUR EVENT SPECIAL<P>",
		 ]
		 */
		var slider_container;
		var current_image_index = 0;
		function next_image_index() {
			if (current_image_index < images.length - 1) {
				return current_image_index + 1;
			} else {
				return 0;
			}
		}
		function prev_image_index() {
			if (current_image_index > 0) {
				return current_image_index - 1;
			} else {
				return images.length - 1;
			}
		}
		$(function() {
			slider_container = $('#gallery');
			for (var i = 0; i < images.length; i++) {
				var row = images[i];
				var class_name = 'slider-img slider-right';
				if (i == 0) {
					class_name = 'slider-img';
				}
				var img = $('<img>').attr('src', row).addClass(class_name);
				slider_container.append(img);
			}
			$('#button-left').click(function() {
				var next_image = $(slider_container.find('img.slider-img')[prev_image_index()]);
				var current_image = $(slider_container.find('img.slider-img')[current_image_index]);
				var next_image_log = next_image_index();
				console.log(next_image_log);
				$("#button-left").prop('disabled', true);
				current_image.animate({
					left : '1020'
				}, 500, function() {
					current_image.addClass('slider-right').removeClass('slider-current').attr('style', '');
				});
				next_image.removeClass('slider-right').addClass('slider-left')
				next_image.animate({
					left : '0'
				}, 500, function() {
					next_image.addClass('slider-current').removeClass('slider-left').attr('style', '');
					$("#button-left").prop('disabled', false);
				});
				current_image_index--;
				if (current_image_index == -1) {
					current_image_index = images.length - 1;
				}
			});
			$('#button-right').click(function() {
				var next_image = $(slider_container.find('img.slider-img')[next_image_index()]);
				var current_image = $(slider_container.find('img.slider-img')[current_image_index]);
				var next_image_log = next_image_index();
				console.log(current_image_index, next_image_log);
				$("#button-right").prop('disabled', true);
				current_image.animate({
					left : '-1020'
				}, 500, function() {
					current_image.addClass('slider-right').removeClass('slider-current').attr('style', '');
				});
				next_image.animate({
					left : '0'
				}, 500, function() {
					next_image.removeClass('slider-right').addClass('slider-current').attr('style', '');
					$("#button-right").prop('disabled', false);
				});
				current_image_index++;
				if (current_image_index == images.length) {
					current_image_index = 0;
				}
			});
		});
	</script>
</html>