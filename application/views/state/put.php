<html>
	<head>
		<title>My Form</title>
	</head>
<body>
<?php echo validation_errors(); ?>

<h1>Add State</h1>
<?php echo form_open_multipart( 'state/put' ); ?>

<label>Name</label>
<input type="text" name="name" value="" size="50" />
<br />
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
