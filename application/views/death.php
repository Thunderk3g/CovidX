<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>
<div class="container">
<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-dark table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">District</th>
      <th scope="col">Total Cases</th>
      <th scope="col">Deaths</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($cases_log as $log) {?>
            <tr>
            <td><?= $log["district"] ?></td>
            <td><?= $log["total_cases"] ?></td>
            <td><?= $log["deaths"] ?></td>
            </tr>
            <?php } ?>
  </tbody>
</table>
</div>
</div>
<style>
  .my-custom-scrollbar {
    position: relative;
    height: 500px;
    overflow: auto;
    margin-top:100px;
    }
    .table-wrapper-scroll-y {
    display: block;
    }
</style>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/footer');?>