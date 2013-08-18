<?php include('./data.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="ru-RU">

<head>

	<title>Be Organized</title>

	<meta charset="UTF-8" />
	<meta name="description" content="Schedule">
	<meta name="author" content="Ruslan Ibragimov">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="./stylesheets/base.css">
	<link rel="stylesheet" href="./stylesheets/skeleton.css">
	<link rel="stylesheet" href="./stylesheets/layout.css">
	<link rel="stylesheet" href="./stylesheets/style.css">

	<script src="http://static.streetball.name/jquery/jquery-latest.min.js"></script>

</head>

<body>

	<div class="container">

		<div class="eleven columns">
			<h2>Текущая неделя: <span class="currentWeek"></span>. Показана неделя: <span class="shownWeek"></span></h2>
			<h2 class="gr1">Подгруппа 1</h2>
			<h2 class="gr2">Подгруппа 2</h2>
		</div>

		<div class="five columns">
			<h2>Set week:</h2>
			<button data-week=".n1">1</button>
			<button data-week=".n2">2</button>
			<button data-week=".n3">3</button>
			<button data-week=".n4">4</button>
		</div>

		<hr />

		<div class="row">
			<div class="day one-third column">
				<h4>Понедельник</h4>
				<?php echo $monday; ?>
			</div>

			<div class="day one-third column">
				<h4>Вторник</h4>
				<?php echo $tuesday; ?>
			</div>

			<div class="day one-third column">
				<h4>Среда</h4>
				<?php echo $wednesday; ?>
			</div>
		</div>

		<div class="row">
			<div class="day one-third column">
				<h4>Четверг</h4>
				<?php echo $thursday; ?>
			</div>

			<div class="day one-third column">
				<h4>Пятница</h4>
				<?php echo $friday; ?>
			</div>

			<div class="day one-third column">
				<h4>Суббота</h4>
				<?php echo $saturday; ?>
			</div>
		</div>

		<hr />

		<div class="six columns offset-by-five">
			<div class="spoiler">
				<p><?php echo $info; ?></p>
			</div>
		</div>

	</div>

	<script>
		(function() {
			// Присылайте свои предложения по этому куску.
			// Тут вся логика.
			<?php
				if ($_GET["gr"] === "1") {
					echo "var currentGroup = '.gr1', hiddenGroup = '.gr2';";
				} elseif ($_GET["gr"] === "2") {
					echo "var currentGroup = '.gr2', hiddenGroup = '.gr1';";
				} else {
					echo "var currentGroup = '.gr1', hiddenGroup = '.gr2';";
				}
			?>;

			$(hiddenGroup).addClass('hide');

			<?php
				$weekNumber = date("W");
				$currentWeek = ($weekNumber - 2 - 1) % 4 + 1;
				// Магическое число: 2 - разница между учебной и календарной неделей
				// текущая неделя - 2 учебная
				// текущая неделя - 4 календарная
			?>

			var currentWeekNumber = <?php echo $currentWeek; ?>,
				currentWeek = '.n' + currentWeekNumber,
				currentDay = <?php echo date("N"); ?>;

			if (currentDay > 5){
				$('.currentWeek').html(currentWeekNumber);
				currentWeekNumber = currentWeekNumber % 4 + 1;
				$('.shownWeek').html(currentWeekNumber);
				currentWeek  = '.n' + currentWeekNumber;
			}
			else{
				$('.shownWeek').html(currentWeekNumber);
				$('.currentWeek').html(currentWeekNumber);
			}

			$('.n1, .n2, .n3, .n4').hide();
			$(currentWeek).not(hiddenGroup).show();
			$('button[data-week="' + currentWeek + '"]').hide();

			$('button').on('click', function() {
				$(this).siblings('button').show().end().hide();
				$('.n1, .n2, .n3, .n4').hide();
				$($(this).data('week')).not(hiddenGroup).show();
				$('.shownWeek').html($(this).data('week').substring(2,3));
			});
		})();
	</script>
	<script type="text/javascript">
		$(document).ready(function() {

			$("div.spoiler").hide();

			$('<button class="reveal full-width button">Преподаватели и предметы &darr;</button> ').insertBefore('.spoiler');

			$("button.reveal").click(function(){
				$(this).parents("div").children("div.spoiler").fadeIn(2500);
				$(this).parents("div").children("button.reveal").fadeOut(600);
			});

		});
	</script><!-- Show spoiler -->
	<script src="favicon.js"></script>


</body>
</html>