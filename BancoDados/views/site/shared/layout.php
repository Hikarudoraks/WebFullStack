<?php
	$url = $this->helpers['URLHelper']->getURL();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Conexão com o banco</title>
		<link rel="stylesheet" type="text/css" href="<?=$url?>/assets/libs/bootstrap-4.2.1-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= $url; ?>/assets/libs/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?= $url; ?>/assets/libs/fontawesome/css/brands.min.css">
		<link rel="stylesheet" type="text/css" href="<?= $url; ?>/assets/libs/fontawesome/css/solid.min.css">
		<link rel="stylesheet" type="text/css" href="<?=$url?>/assets/libs/sweetalert2-7.32.2/dist/sweetalert2.min.css">
		<link rel="stylesheet" type="text/css" href="<?=$url?>/assets/css/home/home.css">
	</head>
	<body>
		<header>
			<?php require 'header.php';?>
		</header>
		<main>
			<?php require $file;?>
		</main>
		<footer>
			<?php require 'footer.php';?>
		</footer>

		<script type="text/javascript">
			var URL = '<?= $url ?>';
			var Helpers = {};
		</script>
		<script type="text/javascript" src="<?= $url; ?>/assets/libs/jquery/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="<?= $url; ?>/assets/libs/popper/popper.min.js"></script>
		<script type="text/javascript" src="<?= $url; ?>/assets/libs/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= $url; ?>/assets/libs/sweetalert2-7.32.2/dist/sweetalert2.min.js"></script>
		<script type="text/javascript" src="<?= $url; ?>/assets/js/site/home.js"></script>

	</body>
</html>