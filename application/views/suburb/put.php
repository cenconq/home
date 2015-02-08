<html>
	<head>
		<title>Add Suburb</title>
	</head>
<body>
<?php echo validation_errors(); ?>
<h1>Add Suburb</h1>
<?php echo form_open_multipart( 'suburb/put' ); ?>
<label>Name</label>
<input type="text" name="name" value="" size="50" />
<br />
<label>State</label>
<?php echo form_dropdown('state_id', $states); ?>
<div><input type="submit" value="Submit" /></div>
</form>
</body>
</html>