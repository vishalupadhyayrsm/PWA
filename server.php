
<?php
$name=basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],"new_img_".$name);
echo ($key!=0?"\r\n":"").$name." Image loaded successfully";
?>