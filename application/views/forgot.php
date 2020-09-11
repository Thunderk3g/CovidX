<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');
if($view == "forgot"){
?>
<div class="container main-content">

<div class="jumbotron">
  <h1 class=" text-center heading lora">Forgot Password?</h1>
</div>

<div class="container forgot-form">
 <form action="<?= base_url("forgot/process")?>" method="POST">
    <span class = "mail"> Enter Your Email </span>
    <input type="email" class="form-control" name="username" id="username" required placeholder="Email" value="<?= isset($_POST['username']) ? $_POST['username'] : ''?>"/>
    <button type="submit" class="btn btn-primary max-width">Submit</button>
</div>
</div>
<style>
    .forgot-form{
    max-width: 365px;
  }
  .mail{
      color: #fff;
  }
</style>

<?php
}
if($view=="newpass"){
  ?>
 <div class="container main-content">

<div class="jumbotron">
  <h1 class=" text-center heading lora">Forgot Password?</h1>
</div>

<div class="container forgot-form">
 <form action="<?= base_url("newpass/process")?>" method="POST">
 <span class = "mail"> Enter Your Phone Number </span>
    <input type="text" class="form-control" name="phone" id="phone" required placeholder="Phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : ''?>"/>
    <span class = "mail"> Enter Your New Password </span>
    <input type="password" class="form-control" name="password" id="password" required placeholder="Password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''?>"/>
    <button type="submit" class="btn btn-primary max-width">Submit</button>
</div>
</div>
<style>
    .forgot-form{
    max-width: 365px;
  }
  .mail{
      color: #fff;
  }
</style>
<?php
}
$this->load->view('templates/footer');?>