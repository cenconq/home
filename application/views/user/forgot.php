<?php echo validation_errors(); ?>
<h1>Forgot Password</h1>
<?php echo form_open( 'user/forgot' ); ?>
	<label>Email</label>
	<input type="text" name="email" value="<?php echo set_value( 'email' ); ?>" size="50"><br>
	Please enter your email
	<input type="submit" value="Submit">
</form>
<a href="/user/login">back to login</a>