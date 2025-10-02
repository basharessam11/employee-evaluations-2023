<?php
include"inc/sql.php";
  $id=filter_var($_POST['ques_id'], FILTER_VALIDATE_INT);

$sql->delete("quiz","$id");



$sql->selectall("num");
if ($sql->res->num_rows>=1) {
while ($row=$sql->res->fetch_assoc()) {
	$id='@'.$id;
	$num=$row['num'];
	
	$dd=str_replace($id,'', $num);
$id=$row['id'];
}

$sql->update1('num',"id=$id",["num"=>"$dd"]);

}


echo 1;


