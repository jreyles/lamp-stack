<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ninja gold</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class='container'>
      <div class='row'>
        <h1>Your Gold: <?= $this->session->userdata('money') ?></h1>
      </div>
      <div class='row'>
        <div class='col-md-3 text-center'>
          <h2>Farm</h2>
            <p>Earn 10/20 gold</p>
          <form action='/process_money' method='post'>
            <input type='hidden' name='building' value="farm">
            <button class='btn btn-primary'>Find Gold</button>
          </form>

        </div>
        <div class='col-md-3 text-center'>
          <h2>Cave</h2>
          <p>Earn 05/10 gold</p>
          <form action='/process_money' method='post'>
            <input type='hidden' name='building' value='cave'>
            <button class='btn btn-primary'>Find Gold</button>
          </form>

        </div>
        <div class='col-md-3 text-center'>
          <h2>House</h2>
            <p>Earn 02/05 gold</p>
          <form action='/process_money' method='post'>
            <input type='hidden' name='building' value='house'>
            <button class='btn btn-primary'>Find Gold</button>
          </form>

        </div>
        <div class='col-md-3 text-center'>
          <h2>Casino</h2>
            <p>Earn/Lose 0-50 gold</p>
          <form action='/process_money' method='post'>
            <input type='hidden' name='building' value='casino'>
            <button class='btn btn-primary'>Find Gold</button>
          </form>

        </div>
      </div>
      <div class='row'>
        <h1>Activities</h1>
        <div style='border:2px solid black; overflow:scroll; height: 200px' class='col-md-8'>
          <?php
          foreach($this->session->userdata('potofgold') as $sentence){
            echo $sentence;
          } ?>
        </div>
      </div>
    </div>
  </body>
</html>
