<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?= base_url("assets/css/jquery-jvectormap-2.0.5.css") ?>"> -->
    <link rel="stylesheet" href="<?= base_url("assets/css/main.css") ?>">
    <link rel=icon href=<?= base_url("assets/favicon.ico") ?>>
    <script src="<?= base_url("assets/js/d3.min.js")?>"></script>
    <script src="<?= base_url("assets/js/topojson.min.js")?>"></script>
    <script src="<?= base_url("assets/js/datamaps.world.min.js")?>"></script>
    <script src="<?= base_url("assets/js/chart.bundle.min.js")?>"></script>
 
    <title>COVID X | Covid Tracker</title>
      </head>
        <body>
          <div class="container-fluid ">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand lora" href="<?= base_url()?>">COVIDX </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php if(isset($_SESSION["id"])){?>
              <form class="form-inline my-2 my-lg-0">
              <span class="username"><?= $_SESSION["username"] ?> </span>
              <a href="<?= base_url("report")?>" class="btn my-2 my-sm-0 med" type="button"><i class="fa fa-ambulance"></i></a>
              <a href="<?= base_url("donate")?>" class="btn my-2 my-sm-0 don" type="button"><i class="fa fa-gift"></i></a>
              <a href="<?= base_url("activity/1")?>" class="btn my-2 my-sm-0 activity" type="button"><i class="fa fa-th-list"></i></a>
              <a href="<?= base_url("dashboard/logout")?>" class="btn my-2 my-sm-0 logout" type="button"><i class="fa fa-sign-out"></i></a>
              </form>
              <?php }?>
              </div>
            </nav>