<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 | survey</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url("Assets/css/home.css")?>">

</head>
<body>
	<div class="conttainer">
		<div class="row">
			<div class="navbar">
				<h1>Covid-19 Survey</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="form">
				<?php echo form_open('welcome/demo');?>
				<?php echo form_input(['id'=>'input','placeholder'=>'Enter Name','name'=>'uname','value'=>set_value('uname')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'type yor ans.','name'=>'a','value'=>set_value('a')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'b','name'=>'b','value'=>set_value('b')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'c','type'=>'text','name'=>'c','value'=>set_value('c')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'d','type'=>'text','name'=>'d','value'=>set_value('d')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'e','type'=>'text','name'=>'e','value'=>set_value('e')]);?>
				<?php echo form_input(['id'=>'input','placeholder'=>'f ','type'=>'text','name'=>'f ','value'=>set_value('f ')]);?>
				<?php echo form_submit(['type'=>'submit','value'=>'Log-In','class'=>'submit','name'=>'submit']);?>
				<?php echo form_reset(['type'=>'reset','value'=>'reset','class'=>'submit']);?>
			</div>
		</div>
	</div>
</body>
</html>