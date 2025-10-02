<?php
include"inc/sql.php";


$date=date("Y-m-d");
$time=date("H:i:s");



 //print_r($_POST);
$org_id=filter_var($_POST['activeQuesOrder'], FILTER_SANITIZE_STRING);

$sql->insert('org',["org_id"=>"$org_id","date1"=>"$date","time1"=>"$time"]);

 $sql->select1("org"," order by id desc limit 1");
      while ($row=$sql->res1->fetch_assoc()) {
   $org_id1=$row['id'];
   
   }

$ex=explode("@", $org_id);

$array=[];
for ($i=1; $i <count($ex) ; $i++) { 
$quiz_id=filter_var($ex[$i], FILTER_VALIDATE_INT)??0;
$text1='ansText_'.$ex[$i];
$type1='ansType_'.$ex[$i];
$phone1='ansIsMobile_'.$ex[$i];
$number1='ansNumber_'.$ex[$i];
$email1='ansIsEmail_'.$ex[$i];
$value1='ansValue_'.$ex[$i];
$ansSelect1='ansSelect_'.$ex[$i];
$optional1='ansOptional_'.$ex[$i];
$char11='ansChar_'.$ex[$i];

$sql->select1("quiz","where id=$quiz_id");
      while ($row=$sql->res1->fetch_assoc()) {
   $name=$row['name'];
   $quiz_id=$row['id'];
   
   }

if (empty($_POST[$type1])) {
$type= 0;
	
}else{
$type=filter_var($_POST[$type1], FILTER_VALIDATE_INT) ?? 0;

}

if (empty($_POST[$phone1])) {
$phone= 0;
	
}else{
$phone=filter_var($_POST[$phone1], FILTER_VALIDATE_INT) ?? 0;

}


if (empty($_POST[$email1])) {
$email= 0;
	
}else{
$email=filter_var($_POST[$email1], FILTER_VALIDATE_INT) ?? 0;

}

if (empty($_POST[$value1])) {
$value= 0;
	
}else{
$value=filter_var($_POST[$value1], FILTER_VALIDATE_INT) ?? 0;

}

if (empty($_POST[$optional1])) {
$optional= 0;
	
}else{
$optional=filter_var($_POST[$optional1], FILTER_VALIDATE_INT) ?? 0;

}
if (empty($_POST[$ansSelect1])) {
$ansSelect= 0;
	
}else{
$ansSelect=filter_var($_POST[$ansSelect1], FILTER_VALIDATE_INT)   ;
$sql->update('org',$org_id1,["far_id"=>"$ansSelect","date1"=>"$date","time1"=>"$time"]);

}
$text=filter_var($_POST[$text1], FILTER_SANITIZE_STRING);
//$type=filter_var($_POST[$type1], FILTER_VALIDATE_INT) ?? 0;
//$phone=filter_var($_POST[$phone1], FILTER_VALIDATE_INT) ?? 0;
$number=filter_var($_POST[$number1], FILTER_SANITIZE_STRING)?? 0;
//$email=filter_var($_POST[$email1], FILTER_VALIDATE_INT) ??0;
//$value=filter_var($_POST[$value1], FILTER_VALIDATE_INT) ?? 0;
//$optional=filter_var($_POST[$optional1], FILTER_VALIDATE_INT) ?? 0;
 


$char1=filter_var($_POST[$char11], FILTER_SANITIZE_STRING);


if ($type==6 and $optional==0  ) {
	if (empty($char1) and $phone==0) {
		array_push($array,3);
	}else if (empty($number) and $phone==1   ) {
		array_push($array, 6);
		
	}
		
	
}else if ($type==7 and $optional==0 and empty($char1)) {
	
		
		array_push($array, 7);

		
	
}else if ($type==8 and $optional==0 and empty($text)) {
	
		
		array_push($array, 8);

		
	
}else if ($type==1  and empty($value)) {
	
		array_push($array, 1);
		
	
}else if ($type==2  and empty($value) ) {
	
		
		array_push($array, $value);


		
	
}else if ($type==3  and empty($value) ) {
	
		
		array_push($array, 3);

		
	
}else if ($type==4  and empty($value)) {
	
		
		array_push($array, 4);

		
	
}else if ($type==5  and empty($value)) {
	
		
		array_push($array, 5);

		
	
}else if ($type==9  and $ansSelect==0) {
	
		
		array_push($array, 9);

		
	
}


// (`id`, `org_id`, `quiz_id`, `type`, `optiona`, `phone`, `email`, `value`, `char1`, `text`)
$sql->insert('answer',["org_id"=>"$org_id1","quiz_id"=>"$quiz_id","quiz_name"=>"$name","type"=>"$type","optional"=>"$optional","phone"=>"$phone","number"=>"$number","email"=>"$email","value"=>"$value","char1"=>"$char1","text"=>"$text","date1"=>"$date","time1"=>"$time","far_id"=>"$ansSelect"]);

}
//print_r($array);
		if (empty($array)) {
			   setcookie('yes', 1, time() + (86400 * 15), "/");
			   echo 2;

			 // 86400 = 1 day
		}else{

			$sql->delete1("answer","where org_id= $org_id1");
		$sql->delete1("org","where id= $org_id1");
		  // print_r($array);

		echo 3;
		 		}
