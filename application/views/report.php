<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>

<div class="container" style="max-width:400px">
<style>
label {color:white;} .error{    color: red;
font-size: 10px;} 
</style>
<h1 class=" text-center heading lora">Report a Case?</h1>
<form action="<?= base_url("report/index")?>" method="POST">
<label>Username</label>
<input type="text" class="form-control" name="username"  value="<?php echo set_value('username'); ?>" size="50" />
<span class="error"><?php echo form_error('username', '<div class="error">', '</div>'); ?></span>
<label>Email Address</label>
<input type="text" class="form-control" name="email"  value="<?php echo set_value('email'); ?>" size="50" />
<span class="error"><?php echo form_error('email', '<div class="error">', '</div>'); ?></span>
<label>Name of the Infected</label>
<input type="text" class="form-control" name="naminf"  value="<?php echo set_value('naminf'); ?>" size="50" />
<span class="error"><?php echo form_error('nameinf', '<div class="error">', '</div>'); ?></span>
<div class="form-row">
    <div class="col-md-2 mb-1">
    <label>State</label>
    <input type="text" class="form-control" name="state"  value="<?php echo set_value('state'); ?>" size="50" />
    <span class="error"><?php echo form_error('state', '<div class="error">', '</div>'); ?></span>
    </div>
    <div class="col-md-6 mb-3">
    <label>District</label>
    <input type="text" class="form-control" name="dis"  value="<?php echo set_value('dis'); ?>" size="50" />
    <span class="error"><?php echo form_error('dis', '<div class="error">', '</div>'); ?></span>
    </div>
    <div class="col-md-4 mb-2">
    <label>Zip-Code</label>
    <input type="text" class="form-control" name="zipcode"  value="<?php echo set_value('zipcode'); ?>" size="10" />
    <span class="error"><?php echo form_error('zipcode', '<div class="error">', '</div>'); ?></span>
    </div>


<label>Contact Number</label>
      <input type="text" class="form-control" name="cnum"  value="<?php echo set_value('cnum'); ?>" size="10" />


<label>Gender : </label>
  <div class="form-check form-check-inline">
    <label class="control control--radio" for="inlineRadio1">Male
      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" <?php if(set_value('gender') == 'male') { echo "checked"; } ?>>
    <div class="control__indicator"></div>
    </div>
</label>
<div class="form-check form-check-inline">
  <label class="control control--radio" for="inlineRadio2">Female
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" <?php if(set_value('gender') == 'female') { echo "checked"; } ?>>
    <div class="control__indicator"></div>
</label>
</div>
<span class="error"><?php echo form_error('gender', '<div class="error">', '</div>'); ?></span>
<label>Contact with COVID-Infected</label>
<div class="select">
      <select>
        <option>Select</option>
        <option>Yes</option>
        <option>No</option>
        <option>Maybe</option>
      </select>
      <div class="select__arrow"></div>
 </div>
<button type="submit" class="btn btn-primary max-width">Submit!</button>

</form>
</div>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/footer');?>