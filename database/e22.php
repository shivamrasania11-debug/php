<?php
if(isset($_POST["submit"]))
{
if(move_uploaded_file($_FILES["photo"]
["tmp_name"],"upload/".basename($_FILES["photo"]["name"])))
{
echo "your file was uploaded succesfully.";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>p 22</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<h2>upload file</h2>
<label for="fileselect">select image:</label>
<input type="file" name="photo">
<input type="submit" name="submit" value="upload">
</form>

<?php
if(isset($_POST["submit"]))
{
	?>
<img src="<?php echo "upload/".basename($_FILES["photo"]["name"]); ?>" height="500px" width="500px" />
<?php
}
?>
</body>
</html>