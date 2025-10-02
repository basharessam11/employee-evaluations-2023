<?php
include"inc/sql.php";
$name=filter_var($_POST['ques'], FILTER_SANITIZE_STRING);
$type=filter_var($_POST['ansType'], FILTER_VALIDATE_INT);
$phone=filter_var($_POST['isMobile'], FILTER_VALIDATE_INT);
$email=filter_var($_POST['isEmail'], FILTER_VALIDATE_INT);
$optional=filter_var($_POST['optional'], FILTER_VALIDATE_INT);

if ($type=9) {
$sql->check("quiz", ["type"=>9]);
if ($sql->check!=1) {
	$sql->insert('quiz',["name"=>"$name","type"=>"$type","phone"=>"$phone","email"=>"$email","optional"=>"$optional"]);
	$sql->selectall("num");

if ($sql->res->num_rows<1) {
$sql->selectall("quiz order by id ");
$array=[];
while ($row=$sql->res->fetch_assoc()) {
	$id='@'.$row['id'];
	array_push($array, $id);

}

 $imp =implode("", $array);


$sql->insert('num',["num"=>"$imp"]);
}else{
$sql->selectall("num");
while ($row1=$sql->res->fetch_assoc()) {

$sql->select1("quiz"," order by id desc limit 1");

while ($row=$sql->res1->fetch_assoc()) {
	$id1='@'.$row['id'];
}

$id=$row1['id'];
	$num=$row1['num'].$id1;
}
$sql->update('num',$id,["num"=>"$num"]);

}

echo 1;
}else{
	echo 2;
}

}else{

	$sql->insert('quiz',["name"=>"$name","type"=>"$type","phone"=>"$phone","email"=>"$email","optional"=>"$optional"]);


$sql->selectall("num");

if ($sql->res->num_rows<1) {
$sql->selectall("quiz order by id ");
$array=[];
while ($row=$sql->res->fetch_assoc()) {
	$id='@'.$row['id'];
	array_push($array, $id);

}

 $imp =implode("", $array);


$sql->insert('num',["num"=>"$imp"]);
}else{
$sql->selectall("num");
while ($row1=$sql->res->fetch_assoc()) {

$sql->select1("quiz"," order by id desc limit 1");

while ($row=$sql->res1->fetch_assoc()) {
	$id1='@'.$row['id'];
}

$id=$row1['id'];
	$num=$row1['num'].$id1;
}
$sql->update('num',$id,["num"=>"$num"]);

}

echo 1;

}





?>