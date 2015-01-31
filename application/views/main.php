<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>澳洲房产投资, 房价, 房产税, 投资移民, 澳洲房产网-房東网</title>
		<link rel="stylesheet" href="/assets/css/style.css">
	</head>
	<body>
		<?php $this->load->view('global/header'); ?>

		<?php echo form_open( 'property/search_result' ); ?>
		<label>Price</label> <?php echo form_dropdown( 'price', array( '', '400000', '900000' ), '' ); ?><br>
		<label>Bedrooms</label> <?php echo form_dropdown( 'bedrooms', array( '', '2', '3' ), '' ); ?><br>
		<label>Suburb</label> <?php echo form_dropdown( 'suburb_id', array( '', '2', '3' ), '' ); ?><br>
		<?php echo form_submit( 'submit', '搜索' ); ?>
		<?php echo form_close(); ?>

		<?php $this->load->view('global/footer'); ?>
	</body>
</html>
