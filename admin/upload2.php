<?php
include"inc/sql.php";
/* Get the name of the uploaded file */
echo$filename = $_FILES['file']['name'];

/* Choose where to save the uploaded file */
$location = "images/".$filename;

if (!empty($filename)) {
	
/* Save the uploaded file to the local filesystem */
if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
$sql->selectall("user limit 1");
while ($row=$sql->res->fetch_assoc()) {
$logo=$row['logo'];

}
unlink("images/$logo");

$sql->update1('user',"1=1",["barcode"=>"$filename"]);
clearstatcache();
  echo 'Success'; 
} else { 
  echo 'Failure'; 
}
}


?>