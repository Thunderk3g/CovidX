<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>
<div class="form-row">
<div class="col-8">
<div class="container outer">
<div class="container">
    <div class="container heading-block">
        <span class="total-count text-center">
        Total Cases - 3773795 (+78171)
        </span>
        <span class="sub-heade-count text-center">
        [Updated on Sep 02, 04:00 pm]
        </span>
    </div>
    <div class="container">
    <div class="row counters">
        <div class="col-3">
            <a href="<?= base_url("cases/active/")?>" class="remove">
            <div class="container bg-1">
            <img src="<?= base_url("assets/img/1.png")?>" alt="" class="thumbnail">
             <span class="status">Active</span>
             <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
             </a>
            </div>
        <div class="col-3">
        <a href="<?= base_url("cases/closed/")?>" class="remove">
            <div class="container bg-2">
            <img src="<?= base_url("assets/img/2.png")?>" alt="" class="thumbnail">
            <span class="status">Closed</span>
            <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
             </a>
        </div>
        <div class="col-3">
        <a href="<?= base_url("cases/death")?>" class="remove">
        <div class="container bg-3">
        <img src="<?= base_url("assets/img/3.png")?>" alt="" class="thumbnail">
            <span class="status">Deaths</span>
            <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
        </a>
        </div>
        <div class="col-3">
        <a href="<?= base_url("cases/recover")?>" class="remove">
            <div class="container bg-4">
        <img src="<?= base_url("assets/img/4.png")?>" alt="" class="thumbnail">
         <span class="status">Recovered</span>
         <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
        </div>
        </a>
    </div>
    </div>
</div>  
</div>
</div>
<div class="col-4">
<div class="container outer">
    <div class="container new">
    <span class="news text-center">Whats New?</span>
    <ul class="instructText">
          <a href="<?= base_url("poll")?>" class="ul">  <li>Do You Think You Have Corona?-VOTE NOW ! </li></a>
          <a href="" class="ul">  <li>Need Medical Assistance ?</li> </a>
        </ul>

    </div>
</div>
</div>
</div>
<style>
.outer{
    border-radius: 20px;
    background: #000033;
}
.new{
    height: 180px;
}
.news{
    color: #fff;
    font-size:30px;
    font-weight: 600;
    display: block;

}
.instructText{
    margin-top: 20px;
    color: #fff;
}
.ul{
    color:#fff;
}
.ul:hover{
    color:#fff;
}
</style>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/footer');?>