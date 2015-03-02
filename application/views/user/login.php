<div class="row">
	<div class="col-lg-8">Map</div>
	<div class="col-lg-4">
		<?php echo validation_errors(); ?>
		<div class="block">
			<h2 class="block-title"><i class="fa fa-lock fa-fw"></i>&nbsp;登录</h2>
			<?php echo form_open( 'user/login' ); ?>
			<div class="form-group">
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
			      <input type="text" placeholder="邮箱" class="form-control">
			    </div>
		    </div>
		    <div class="form-group">
			    <div class="input-group">
			      <div class="input-group-addon"><i class="fa fa-lock"></i></div>
			      <input type="password" placeholder="密码" class="form-control">
			    </div>
		    </div>
		    <div class="form-group">
				<input type="submit" value="登录" class="btn" />
			</div>
			<a href="/user/put">免费注册</a><br />
			<a href="/user/forgot">忘记登录密码?</a>			
			</form>
		</div>	
	</div>
</div>