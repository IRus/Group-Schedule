<?php include('./data.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="ru">
  <head>
    <title>Be Organized</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Schedule">
    <meta name="author" content="Ruslan Ibragimov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->
    <link href="css/style.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="page-header">
          <h2>Текущая неделя: <span class="currentWeek"></span> <small>Показана неделя: <span class="shownWeek"></span></small></h2>
        </div>
        <div>
          <?php echo $temp_info; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10">
          <div class="btn-group btn-group-justified">
            <a data-group="1" href="/a/?gr=1" class="btn btn-default btn-lg">Группа 1</a>
            <a data-group="2" href="/a/?gr=2" class="btn btn-default btn-lg">Группа 2</a>
            <a data-toggle="modal" href="#prepod-info" class="btn btn-default btn-lg">Info</a>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="btn-group">
            <button type="button" class="btn btn-primary btn-lg" data-week=".n1">1</button>
            <button type="button" class="btn btn-success btn-lg" data-week=".n2">2</button>
            <button type="button" class="btn btn-info btn-lg" data-week=".n3">3</button>
            <button type="button" class="btn btn-warning btn-lg" data-week=".n4">4</button>
          </div>
        </div>
      </div>

      <div class="row">
          <div class="day col-lg-4">
              <h4>Понедельник</h4>
              <?php echo $monday; ?>
          </div>
          <div class="day col-lg-4">
              <h4>Вторник</h4>
              <?php echo $tuesday; ?>
          </div>
          <div class="day col-lg-4">
              <h4>Среда</h4>
              <?php echo $wednesday; ?>
          </div>
      </div>
      <div class="row">
          <div class="day col-lg-4">
              <h4>Четверг</h4>
              <?php echo $thursday; ?>
          </div>
          <div class="day col-lg-4">
              <h4>Пятница</h4>
              <?php echo $friday; ?>
          </div>
      </div>

    </div>

    <div class="modal fade" id="prepod-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Информация о преподавателях</h4>
          </div>
          <div class="modal-body">
            <p><?php echo $info; ?></p>
          </div>
        </div>
      </div>
    </div>

    <script src="http://static.streetball.name/jquery/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
                };
            ?>;

            // Hide all entries for 
            $(hiddenGroup).addClass('hide');

            // Highlight Group Link
            if (currentGroup == ".gr1") {
              $("a[data-group='1']").addClass('btn-success').attr('href','#');
            } else {
              $("a[data-group='2']").addClass('btn-success').attr('href','#');
            };


            <?php
                $weekNumber = date("W");
                $currentWeek = ($weekNumber - 2 - 1) % 4 + 1;
                //                            N
                // N - Магическое число: 2 - разница между учебной и календарной неделей
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
    <script src="favicon.js"></script>
  </body>
</html>