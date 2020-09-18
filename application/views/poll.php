<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll page</title>
</head>
<body>
 <div class="container">
 <span class="tod-poll">
        Today's Poll 
</span>  
<div class="container outer">
<?php if(!empty($voted) && $voted === 1) {
        echo '<div class="alert alert-success">Your have voted successfully.</div>';
      }
      else if(!empty($voted)  && $voted === 2) {
        echo '<div class="alert alert-danger">Your had already voted.</div>';
      }
      ?>
<div class="container new">
<div class="black_box">
    
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-home-list" data-toggle="list"  role="tab" aria-controls="home">Yes, I have been tested in a hospital</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-profile-list " data-toggle="list" role="tab" aria-controls="profile">No, I have been tested in a hospital</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-messages-list" data-toggle="list"role="tab" aria-controls="messages">Maybe , I have some symptoms</a>
      <a class="list-group-item list-group-item-action list-group-item-dark" id="list-messages-list" data-toggle="list" role="tab" aria-controls="messages">I am planning to get checked.</a>

      <button type="submit" class="btn btn-dark max-width">SUBMIT!</button>

    </div>
    

</div>

</div>
</div>
</div>>
</body>
</html>
<style>
.outer{
    margin-top: 0px;
    border-radius: 5px;
    background: #000033;
    padding:0px;
}
.list-group{
    margin-top:20px;
    margin-left:20px;
    margin-right:20px;
    height:100%;
}
.new{
    height:300px;
    padding:0px;
}

.black_box {
    width:100%;
    height:100%;
    float:left;
    border:2px solid #000;
    outline: 1px solid #fff;
    outline-offset: -10px;
}
.btn{
    margin-top:10px;
    align: center;
    max-width: 100 px;
}
.tod-poll{
    color:white;
    font-size: 30px;
    font-weight: 600;
    
}
</style>
<?php $this->load->view('templates/footer');?>