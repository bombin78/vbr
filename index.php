<?php
header("Content-Type:text/html;charset utf-8");
include_once("connect/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">
	<link rel="stylesheet" href="gallery-master/css/blueimp-gallery.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<!--[if lt IE 9]>
	<script>
		var e = ("article,aside,footer,header,nav,section").split(',');
		for (var i = 0; i < e.length; i++) {
			document.createElement(e[i]);
		}
	</script>
	<link rel="stylesheet" type="text/css" href="css/src/IE8.css">
	<![endif]-->
	<!--[if lt IE 8]>
	<script type="text/javascript" src="js/jquery-ie6-7blocker.js"></script>
	<![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="header-container">
		<!-- шапка сайта -->
		<?php include_once "blocks/header.php" ?>
		<!-- /шапка сайта -->
	</div>
	<div class="content-container">
		<div class="content-container_block">
			<!-- боковая панель -->
			<?php include_once "blocks/sidebar.php" ?>
			<!-- /боковая панель -->
			<!-- основной контент -->
			<?php include_once $connect; ?>
			<!-- /основной контент -->
		</div>
	</div>
	<div class="footer-container">
		<div class="footer-container_block">
			<!-- подвал сайта-->
			<?php include_once "blocks/footer.php" ?>
			<!-- /подвал сайта-->
		</div>
	</div>
	<div class="modal-container">
		<!-- модальное окно галереи -->
		<?php include_once "blocks/modal-gallery.php" ?>
		<!-- /модальное окно галереи-->
	</div>
</div>
<input id='abs_address' type='hidden' value='<?php echo $abs_address; ?>'><!-- for gallery-master -->
<script src="gallery-master/js/jquery.blueimp-gallery.min.js"></script>
<script>
	$('#links').on('click', function (event) {
		event = event || window.event;
		var target = event.target || event.srcElement,
			link = target.src ? target.parentNode : target,
			options = {index: link, event: event},
			links = this.getElementsByTagName('a');
		blueimp.Gallery(links, options);
	});
</script>
<script type="text/javascript" src="js/modules-control.js"></script>
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->
</body>
</html>
