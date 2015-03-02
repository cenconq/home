<div class="row">
	<div class="col-lg-6">
		<?php echo validation_errors(); ?>
		<div class="block">
			<h2 class="block-title"><i class="fa fa-lock fa-fw"></i>&nbsp;免费注册</h2>
			<?php echo form_open( 'user/put' ); ?>
		    <div class="form-group">
		      <label for="first_name">姓氏</label>
		      <input type="text" class="form-control" name="first_name" value="<?php echo set_value( 'first_name' ); ?>">
		    </div>
		    <div class="form-group">
		      <label for="first_name">邮箱</label>
		      <input type="email" class="form-control" name="email" value="<?php echo set_value( 'email' ); ?>">
		    </div>
		    <div class="form-group">
		      <label for="first_name">密码</label>
		      <input type="text" class="form-control" name="password" value="<?php echo set_value( 'password' ); ?>">
		    </div>
		    <div class="form-group">
		      <label for="first_name">确认密码</label>
		      <input type="text" class="form-control" name="passconfirm" value="<?php echo set_value( 'passconfirm' ); ?>">
		    </div>
		    <div class="form-group">
		      <label for="first_name">名字</label>
		      <input type="text" class="form-control" name="first_name" value="<?php echo set_value( 'first_name' ); ?>">
		    </div>
		    <div class="form-group">
		      <label for="first_name">邮箱</label>
		      <input type="text" class="form-control" name="suburb_id" value="<?php echo set_value( 'suburb_id' ); ?>">
		    </div>
		    <div class="form-group">
				<input type="submit" value="注册" class="btn">
			</div>
			<a href="/user/login">亲，请登录</a>
			</form>
		</div>
	</div>
</div>