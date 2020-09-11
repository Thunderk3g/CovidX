<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>
<div class="container main-content">
<div class="jumbotron">
  <h1 class=" text-center heading lora">Register!</h1>
</div>
<div class="container login-form">
	<form action="<?= base_url("register/process")?>" method="POST">
	<?php if(isset($message) && isset($type) && $type == "error"){?>
		<div class="alert">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<?= $message ? $message : ''?>
		</div>
	<?php }?>
	<?php if(isset($message) && isset($type) && $type == "success"){?>
		<div class="alert success">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<?= $message ? $message : ''?>
		</div>
	<?php }?>
	<span class = "mail"> Enter Your Email </span>
	<input type="email" class="form-control" name="username" id="username" required placeholder="Email" value="<?= isset($_POST['username']) ? $_POST['username'] : ''?>"/>
	<span class = "mail"> Enter Your Phone Number </span>
    <input type="text" class="form-control" name="phone" id="phone" required placeholder="Phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : ''?>"/>
	<span class = "mail"> Enter Your Password </span>
	<input type="password" class="form-control" name="password" id="password" required placeholder="Password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''?>"/>
    <span class = "mail"> Confirm Your Password </span>
	<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required placeholder="Confirm Password" value="<?= isset($_POST['confpassword']) ? $_POST['confpassword'] : ''?>"/>
	<button type="submit" class="btn btn-primary max-width">Register!</button>
	<span class="forgot-text"><a href="<?= base_url("forgot")?>" class="forgot-link">Forgot Password?</a><a href="<?= base_url("login")?>" class="create-link">Have an account? Login</a></span>
	</form>
</div>
<style>
.mail{
	color: #fff;
	margin-top: 10px;
	margin-bottom : 10px;
}
</style>
<span class="footer-text">© Diwakar Adhikari</span>
</div>
</div>
<?php
$this->load->view('templates/footer');
?>