<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$attributes = array('class' => 'email');

		echo form_open('main_controller/mailSend', $attributes)."\n";

		$inputName = array(
			            	  	'name'        => 'userName',
			              		'class'          => 'username',
			              		'value'       => '',
			              		'placeholder' => 'Имя',
			              		'maxlength'   => '100',
			              		'size'        => '50',
			              		'style'       => 'width:200px;',
			            	);

		$inputFName = array(
			            	  	'name'        => 'userFName',
			              		'class'          => 'username',
			              		'value'       => '',
			              		'placeholder' => 'Фамилия',
			              		'maxlength'   => '100',
			              		'size'        => '50',
			              		'style'       => 'width:200px;',
			            	);

		$inputSName = array(
			            	  	'name'        => 'userSName',
			              		'class'          => 'username',
			              		'value'       => '',
			              		'placeholder' => 'Отчество',
			              		'maxlength'   => '100',
			              		'size'        => '50',
			              		'style'       => 'width:200px;',
			            	);

		$inputPass = array(
			            	  	'name'        => 'userPass',
			              		'class'          => 'username',
			              		'value'       => '',
			              		'placeholder' => 'Пароль',
			              		'maxlength'   => '100',
			              		'size'        => '50',
			              		'style'       => 'width:200px;',
			            	);

		echo form_input($inputName)."<br />\n";
		echo form_input($inputFName)."<br />\n";
		echo form_input($inputSName)."<br />\n";
		echo form_password($inputPass)."<br />\n";
		echo form_submit('mysubmit', 'Отправить!')."<br />\n";
		echo form_close()."\n";

	 ?>
</body>
</html>