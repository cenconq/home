<?php echo validation_errors(); ?>
	<h1>User Login</h1>
	<?php echo form_open( 'user/login' ); ?>
	<label>Email</label> <input type="text" name="email" value="" size="50"><br>
	<label>Password</label> <input type="text" name="password" value="" size="50"><br>
	<input type="submit" value="Submit">
</form>
<a href="/user/put">Create new account</a><br />
<a href="/user/forgot">Forgot password</a>