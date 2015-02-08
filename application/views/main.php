<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>澳洲房产投资, 房价, 房产税, 投资移民, 澳洲房产网-房東网</title>
		<link rel="stylesheet" href="/assets/css/style.css">
	</head>
	<body>
		<?php $this->load->view('global/header'); ?>

		<?php echo form_open( 'main/search' ); ?>
		<label>最高价格</label>
		<?php echo form_dropdown( 'price', $price, 0 ); ?><br>
		<label>卧室</label>
		<?php echo form_dropdown( 'bedrooms', $bedrooms, 0 ); ?><br>
		<label>地点</label>
		<?php echo form_dropdown( 'suburb_id', $suburbs, 0 ); ?><br>
		<?php echo form_submit( 'submit', '搜索' ); ?>
		<?php echo form_close(); ?>

		<?php $this->load->view('global/footer'); ?>
	</body>
</html>
