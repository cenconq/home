<?php echo validation_errors(); ?>
	<h1>Add Role</h1>
	<?php echo form_open( 'role/put' ); ?>
	<label>Role Name</label> <input type="text" name="name" value="" size="50"><br>
	<input type="submit" value="Submit">
</form>