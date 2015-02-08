
<?php echo validation_errors(); ?>

<h1>Registration</h1>
<?php echo form_open_multipart( 'property/put_images' ); ?>
<label>Images</label>
<input type="file" name="userfile[]" multiple />
<br />
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
