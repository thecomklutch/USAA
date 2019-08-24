<?php
$db = mysqli_connect("localhost", "root", "", "image_upload");
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <h2 class='w3-small'><span id='invalid'><b>already exists.</b></span></h2> ";
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

echo "<h2 class='w3-small'><span id='success'>Image Uploaded Successfully...!!</span><br/></h2>";
echo "<h2 class='w3-small'><br/><b>File Name: </b> " . $_FILES["file"]["name"] . "<br></h2>";
echo "<h2 class='w3-small'><b>Type: </b> " . $_FILES["file"]["type"] . "<br></h2>";
echo "<h2 class='w3-small'><b>Size: </b> " . ($_FILES["file"]["size"] / 1024) . " kB<br></h2>";
$image = $_FILES["file"]["name"];
$image_text = $_FILES["file"]["name"];
$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);
}
}
}
else
{
echo "<h2 class='w3-small'><span id='invalid'>***Invalid file Size or Type***<span></h2>";
}
}
?>