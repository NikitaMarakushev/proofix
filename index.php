<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Расписание поездок</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Расписание</a>

  <label for="number_fields">Количество полей</label>
  <input type="number" id="number_fields">
  <button id="pull" href="#">Заполнить расписание</button>

  <div class="wrap">
    <div id="divresult">
      <ul id="result"></ul>
    </div>
  </div>
</nav>

    <div class="container">
        <form method="POST">
            <div class="form-group">
                <label for="date_beginning">Начало: </label>
                <input type="datetime-local" name="date_from" class="form-control" id="fate_from" >
            </div>
            <div class="form-group">
                <label for="date_finishig">Конец: </label>
                <input type="datetime-local" name="date_to" class="form-control" id="date_to">
            </div>
            <button type="submit" id="submit_show" name="show_submit" class="btn btn-info">Вывести</button>
        </form>
    </div>

  <div class="container">
    <div id="form">
      <form id="form-input" method="POST" action="p_scripts/db_connector.php"
      >
        <div class="form-group">
          <label for="region">Регион: </label>
          <select class="form-control" id="region" name="region">
            <option>Выберите регион</option>
            <?php require_once 'p_scripts/fill_region.php'; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="date_leaving">Дата выезда из Москвы: </label>
          <input type="datetime-local" class="form-control" id="date_leaving" name="date_leaving" >
        </div>

        <div class="form-group">
          <label for="courier">ФИО курьера: </label>
          <select class="form-control" name="courier" id="courier" >
            <option>Выберите курьера</option>
            <?php require_once 'p_scripts/fill_courier.php'; ?>
          </select>
        </div>

        <div class="form-group">
        <label for="date_arriving">Дата прибытия в выбранный регион: </label>
          <input type="text" class="form-control" id="date_arriving" name="date_arriving" disabled="disabled" >
        </div>

        <button type="submit" name="send_schedule" id="send_schedule" class="btn btn-primary">Внести</button>
      </form>
      <p id="status"></p>
    </div>
  </div>

  <!--Jquery-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <!--User scripts-->
  <script type="text/javascript" src="scripts/date_range.js"></script>
  <script type="text/javascript" src="scripts/add_schedule.js"></script>
  <script type="text/javascript" src="scripts/show_schedule.js"></script>
  <script type="text/javascript" src="scripts/filler.js"></script>

</body>
</html>

 <!-- // while ($regions = mysqli_fetch_array($regions_array)) {
          //       print "<option value=".$regions['id'].">";
          //       print $regions['region'];
          //       echo("</option>");
              
          //   }
          
          while ($couriers = mysqli_fetch_array($couriers_array)) {
                    print "<option value=".$couriers['id'].">";
                    print $couriers['name'];
                    echo("</option>");
                    }
                    ?>
                }
          
          
           -->

