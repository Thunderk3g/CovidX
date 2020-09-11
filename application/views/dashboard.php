<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>
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
            <div class="container bg-1">
            <img src="<?= base_url("assets/img/1.png")?>" alt="" class="thumbnail">
             <span class="status">Active</span>
             <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
            </div>
        <div class="col-3">
            <div class="container bg-2">
            <img src="<?= base_url("assets/img/2.png")?>" alt="" class="thumbnail">
            <span class="status">Closed</span>
            <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
        </div>
        <div class="col-3">
            <div class="container bg-3">
        <img src="<?= base_url("assets/img/3.png")?>" alt="" class="thumbnail">
            <span class="status">Deaths</span>
            <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
        </div>
        <div class="col-3">
            <div class="container bg-4">
        <img src="<?= base_url("assets/img/4.png")?>" alt="" class="thumbnail">
         <span class="status">Recovered</span>
         <span class="number">2454578</span>
             <span class="increase-decrease">+89999</span>
             </div>
        </div>
    </div>
    </div>
    <style>
        
    </style>
</div>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/footer');?>