<?php 

$target_dir = "files/";
$file = $_FILES['fileToUpload']['name'];
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir/$file");
var_dump($_FILES);

?>