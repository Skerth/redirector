<?php
global $theme;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta name="robots" content="noindex, nofollow"/>
	<link rel="shortcut icon" href="<?= base_path() . drupal_get_path('theme', $theme) ?>/favicon.ico" type="image/vnd.microsoft.icon" />
	<title><?= $error ?></title>
	<style>
		body {
			padding: 25px;
			font: 400 16px/1.482 'Arial', sans-serif;
			text-align: center
		}
	</style>
</head>
<body>
	<p><?= $error ?></p>
	<p><button onclick="window.history.go(-1); return false;" title="Вернуться на сайт">Назад</button></p>
</body>
</html>
