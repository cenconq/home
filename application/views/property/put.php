<html>
	<head>
		<title>My Form</title>
	</head>
<body>
<?php echo validation_errors(); ?>

<h1>Add Property</h1>
<?php echo form_open_multipart( 'property/put' ); ?>

<label>Price</label>
<input type="text" name="price" value="" size="50" />
<br />
<label>Address</label>
<input type="text" name="address" value="" size="50" />
<br />
<label>House Size</label>
<input type="text" name="house_size" value="" size="50" />
<br />
<label>Land Size</label>
<input type="text" name="land_size" value="" size="50" />
<br />
<label>Postcode</label>
<input type="text" name="post_code" value="" size="50" />
<br />
<label>Bedrooms</label>
<input type="password" name="bedrooms" value="" size="50" />
<br />
<label>Bathrooms</label>
<input type="text" name="bathrooms" value="" size="50" />
<br />
<label>Ensuite</label>
<input type="text" name="ensuite" value="" size="50" />
<br />
<label>Garage</label>
<input type="text" name="garage" value="" size="50" />
<br />
<label>Carport</label>
<input type="text" name="carport" value="" size="50" />
<br />
<label>Carspace</label>
<input type="text" name="carspace" value="" size="50" />
<br />
<label>Suburb</label>
<input type="text" name="suburb_id" value="" size="50" />
<br />
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
