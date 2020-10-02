<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>
<div class="container">
<div class="form-row">
<div class="col-md-8 col-sm-12">
<div class="container outer" style ="height:400px">
<div class="container">

    <div class="container heading-block">
        <span class="total-count text-center">
        Total Cases :
        <?= $summary["tested_total"] ?>  
        <span class="sub-heade-count text-center" style="margin-top: 20px">
       Updated at:  <?= $summary["updated_at"] ?>
        </span>
    </div>
    <div class="container">
    <div class="row counters">
        <div class="col-md-3 col-sm-12">
            <div class="container bg-1">
            <img src="<?= base_url("assets/img/1.png")?>" alt="" class="thumbnail">
             <span class="status">Total Cases</span>
             <span class="number"><?= $summary["tested_positive"] ?></span>
             <span class="increase-decrease">(+1356)</span>
             </div>
            
            </div>
        <div class="col-md-3 col-sm-12">
            <div class="container bg-2">
            <img src="<?= base_url("assets/img/2.png")?>" alt="" class="thumbnail">
            <span class="status">Closed Cases</span>
            <span class="number"><?= $summary["tested_negative"] ?></span>
            <span class="increase-decrease">(+125)</span>

             </div>
           
        </div>
        <div class="col-md-3 col-sm-12">
        <div class="container bg-3">
        <img src="<?= base_url("assets/img/3.png")?>" alt="" class="thumbnail">
            <span class="status">Deaths</span>
            <span class="number"><?= $summary["deaths"] ?></span>
            <span class="increase-decrease">(+2)</span>

             </div>
    
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="container bg-4">
        <img src="<?= base_url("assets/img/4.png")?>" alt="" class="thumbnail">
         <span class="status">Recovered</span>
         <span class="number"><?= $summary["recovered"] ?></span>
             <span class="increase-decrease">(+823)</span>
             </div>
        </div>
     
    </div>
    </div>
</div>  
<div>
<marquee behavior="" direction="left">
<div class="sliders">
<?php foreach($cases_log as $log){?>
    <div class="slide-item">
            <span class="slide-name"><?= $log['district']?></span>
            <span class="slide-number"><?= $log['total_cases']?></span>
        </div>
        <?php }?>

</div>
</marquee>
</div>
</div>

</div>

<div class="col-md-4 col-sm-12">
<div class="container outer">
    <div class="container new">
    <h1 class="heading-counter">What's New</h1>

        <ul class="news">
        <?php foreach ($rss['items'] as $key => $value) {?>
        <li>
        <a href="<?= $value->link ?>">
        <span style="color: #ffffff;"></span>
        <?= $value->title ?></a>
         </li>
        <?php }?>

    </div>
</div>

</div>
<div class="col-12 chart">
<canvas id="myChart" style="responsive" ></canvas>
          <script>
        // Filter table
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
// The type of chart we want to create
   type: 'bar',

// The data for our dataset
data: {
labels: ['Aug 17', 'Aug 24', 'Aug 31 ', 'Sep 7', 'Sep 14', 'Sep 21', 'Sep 24'],
datasets: [{
label: 'New Cases',
backgroundColor: 'transparent',
borderColor: 'rgb(255, 99, 132)',
data: [
  <?php           
   $nepal = $this->db->get('covid_timeline')->result_array();          
      for($i = 200; $i<count($nepal); $i++) {               
          echo $nepal[$i]['newCases']. ",";             
         }?>
],
borderWidth: 2 ,
},
{
label: 'New Recoveries',
backgroundColor: 'transparent',
borderColor: 'rgb(255, 0, 0)',
data: [
  <?php           
   $nepal = $this->db->get('covid_timeline')->result_array();          
      for($i = 200; $i<count($nepal); $i++) {               
          echo $nepal[$i]['newRecoveries']. ",";             
         }?>
],
borderWidth: 2 ,
},
{
label: 'New Deaths',
backgroundColor: 'transparent',
borderColor: 'rgb(0, 255, 0)',
data: [
  <?php           
   $nepal = $this->db->get('covid_timeline')->result_array();          
      for($i = 200; $i<count($nepal); $i++) {               
          echo $nepal[$i]['newDeaths']. ",";             
         }?>
],
borderWidth: 2 ,
},
]
},

// Configuration options go here
options: {
  scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
  tooltips:{mode: 'index'},
  legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 12}},
}
});

 </script>
</div>
</div>
</div>
<div class ="container worldmap">
<div id="chartdiv"></div>
</div>

</div>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/footer');?>