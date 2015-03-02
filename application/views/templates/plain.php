<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('global/head'); ?>
	<body>
		<?php $this->load->view('global/header'); ?>
		<?php $this->load->view('global/menu'); ?>
		<div role="main">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 main_wrapper">
						<?php echo $body; ?>
					</div>				
				</div>
			</div>
		</div>
		<?php $this->load->view('global/bottom'); ?>
		<?php $this->load->view('global/footer'); ?>
	</body>
</html>