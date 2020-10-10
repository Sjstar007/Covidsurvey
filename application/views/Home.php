<!DOCTYPE html>
<html>
<head>
	<title>Covid-Survey</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/home.css")?>">

<?php //link_tag("Assets/css/home.css")?>

</head>
<body>
	<div class="form-box">
		<h3>Welcome</h3>
		<h6>To</h6>
		<h5>Covid-19 survey</h5>
		<?php echo form_open('welcome/demo');?>
			<!-- 	<input type="text" name="name" placeholder="Enter Name" id="input"> -->
				<?php echo form_input(['id'=>'input','placeholder'=>'Enter Name','name'=>'uname','value'=>set_value('uname')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'Enter Stste','name'=>'ustate','value'=>set_value('ustate')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'Enter City','name'=>'ucity','value'=>set_value('ucity')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'Enter Mobile','type'=>'number','name'=>'umobile','value'=>set_value('umobile')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'Enter Password','type'=>'password','name'=>'upass','value'=>set_value('upass')]);?>
				<?php echo form_submit(['type'=>'submit','value'=>'Log-In','class'=>'submit','name'=>'submit']);?>
				<?php echo form_reset(['type'=>'reset','value'=>'reset','class'=>'submit']);?>
			
	</div>
	<div class="span">
		<h2><?php echo validation_errors();?></h2>
	</div>
	<script></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>