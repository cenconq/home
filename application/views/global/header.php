<header>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 login_status">
				<?php print_r($this->session->userdata('email')); ?>
				<a href="/user/login">亲，请登录</a>
				<span class="sep">|</span>
				<a href="/user/put">免费注册</a>
				<span class="sep">|</span>
				<a href="/user/logout">注销</a>
			</div>
		</div>
	</div>
</header>
<div role='logo'>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 logo_wrapper">
				<a href="/"><img src="/assets/images/logo.png" style="width:100px;"></a>
			</div>
		</div>
	</div>
</div>