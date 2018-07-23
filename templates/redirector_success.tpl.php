<?php
global $theme;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta name="robots" content="noindex, nofollow"/>
	<link rel="shortcut icon" href="<?= base_path() . drupal_get_path('theme', $theme) ?>/favicon.ico" type="image/vnd.microsoft.icon" />
	<title>Выполняется переход по ссылке <?= $url ?></title>
	<style>
		body {
			padding: 25px;
			font: 400 16px/1.482 'Arial', sans-serif;
			text-align: center
		}

		#time-sec {
			font-weight: 700;
			color: #f22b05
		}
	</style>
</head>
<body>

<script type="text/javascript">
	// запускаем таймер для замены чисел в html
	window.onload = function() {
		var timer_count = document.getElementById('time-sec');
		var timer_label = document.getElementById('time-label');
		var timer_label_title = ['секунду', 'секунды', 'секунд'];
		var timer_interval = setInterval(function () {
			timer_count.textContent = timer_count.textContent - 1;
			timer_label.textContent = end_word_depending_num(
				timer_count.textContent,
				timer_label_title
			);
			if(timer_count.textContent === '0') {
				clearInterval(timer_interval);
			}
		}, 1000);
		// Определение окончания в зависимости от числа
		function end_word_depending_num(number, titles) {
			var cases = [2, 0, 1, 1, 1, 2];
			return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number%10<5)?number%10:5]];
		}
	};
</script>
Вы будете перенаправлены на <b><?= $url ?></b> через <span id="time-sec"><?php print $wait; ?></span> <span id="time-label">секунд</span>
</body>
</html>
