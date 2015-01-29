<html>
	<head>
		<title>My Form</title>
	</head>
<body>
<?php echo validation_errors(); ?>

<h1>Registration</h1>
<?php echo form_open('user/put'); ?>

<label>First Name</label>
<input type="text" name="first_name" value="" size="50" />
<br />
<label>Last Name</label>
<input type="text" name="last_name" value="" size="50" />
<br />
<label>Email</label>
<input type="email" name="email" value="" size="50" />
<br />
<label>Password</label>
<input type="password" name="password" value="" size="50" />
<br />
<label>Suburb</label>
<?php
$options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );

$shirts_on_sale = array('small', 'large');

echo form_dropdown('shirts', $options, 'large');
?>
<br />
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>