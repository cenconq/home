<?php echo validation_errors(); ?>
<h1>Registration</h1>
<?php echo form_open( 'user/put' ); ?>
	<label>First Name</label>
	<input type="text" name="first_name" value="<?php echo set_value( 'first_name' ); ?>" size="50"><br>
	<label>Last Name</label> <input type="text" name="last_name" value="<?php echo set_value( '' ); ?>" size="50"><br>
	<label>Email</label> <input type="email" name="email" value="<?php echo set_value( 'email' ); ?>" size="50"><br>
	<label>Password</label> <input type="password" name="password" value="<?php echo set_value( 'password' ); ?>" size="50"><br>
	<label>Confirm Password</label> <input type="password" name="passconfirm" value="<?php echo set_value( 'passconfirm' ); ?>" size="50"><br>
	<label>Suburb</label> <?php echo form_dropdown('suburb_id', $suburbs); ?><br>
	<input type="submit" value="Submit">
</form>

<a href="/user/login">Click here to login</a>