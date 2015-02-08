<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<h1>Registration</h1>

<?php echo form_open('user/put'); ?>

<h5>First Name</h5>
<input type="text" name="first_name" value="" size="50" />

<h5>Last Name</h5>
<input type="text" name="last_name" value="" size="50" />

<h5>Email</h5>
<input type="email" name="email" value="" size="50" />

<h5>Password</h5>
<input type="password" name="password" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>