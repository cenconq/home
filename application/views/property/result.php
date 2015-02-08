<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>澳洲房产投资, 房价, 房产税, 投资移民, 澳洲房产网-房東网</title>
		<link rel="stylesheet" href="/assets/css/style.css">
	</head>
	<body>
		<?php $this->load->view('global/header'); ?>

		<div id="search">
			为您搜索到 <?php echo $total_result; ?> 个房产：
		</div>

		<div id="pager">
			<?php echo $pagination; ?>
		</div>

		<div id="search-result">
			<?php foreach ( $properties as $p ): ?>
			<div class="property">
				<div class="price">
					AUD $ <?php print $p->price; ?>
				</div>
				<div class="address">
					<?php print $p->address . ', ' . $p->post_code; ?>
				</div>
				<div class="house_size">
					<?php print $p->house_size; ?>
				</div>
				<div class="land_size">
					<?php print $p->land_size; ?>
				</div>
				<div class="bedrooms">
					<?php print $p->bedrooms; ?>
				</div>
				<div class="bathrooms">
					<?php print $p->bathrooms; ?>
				</div>
				<div class="ensuite">
					<?php print $p->ensuite; ?>
				</div>
				<div class="garage">
					<?php print $p->garage; ?>
				</div>
				<div class="carport">
					<?php print $p->carport; ?>
				</div>
				<div class="carspace">
					<?php print $p->carspace; ?>
				</div>
				<div class="more">
					<a href="/property/get_result/<?php print $p->id; ?>">了解更多</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<div id="pager">
			<?php echo $pagination; ?>
		</div>
		
		<?php $this->load->view('global/footer'); ?>
	</body>
</html>