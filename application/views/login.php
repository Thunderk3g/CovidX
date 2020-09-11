<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>
<div class="container main-content">
<div class="jumbotron">
  <h1 class=" text-center heading lora">Sign in!</h1>
</div>
<div class="container login-form">
	<form action="<?= base_url("login/process")?>" method="POST">
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
	<input type="text" class="form-control" name="username" id="username" placeholder="Email or Phone" value="<?= isset($_POST['username']) ? $_POST['username'] : ''?>"/>
	<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= isset($_POST['password']) ? $_POST['password'] : ''?>"/>
	<button type="submit" class="btn btn-primary max-width">Login!</button>
	<span class="forgot-text"><a href="<?= base_url("forgot")?>" class="forgot-link">Forgot Login?</a><a href="<?= base_url("register")?>" class="create-link">Create Account</a></span>
	</form>
</div>
<span class="footer-text">© Diwakar Adhikari</span>
</div>
</div>
<?php
$this->load->view('templates/footer');
?>