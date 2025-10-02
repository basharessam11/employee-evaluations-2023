
<?php
include"inc/sql.php";



$page=filter_var($_POST['page'], FILTER_VALIDATE_INT)-1;
$quiz_id=filter_var($_POST['ques_id'], FILTER_VALIDATE_INT);
$offset=filter_var($_POST['totalAnswers'], FILTER_VALIDATE_INT);
if (isset($_GET['far'])and !empty($_GET['far'])) {
 $f="far=".$_GET['far'].'&';
   $far='and far_id='.$_GET["far"];
}else{
 $f="";
 $far='';

}
  $id=0;
  for ($i=1; $i <=$page ; $i++) { 
   $id=$id+25;
  }
  
if (isset($_GET['day']) and $_GET['day']=='list' ) {

if (isset($_GET['day1'])) {
  $date=$_GET['day1'];
}else{
   $date=date("Y/m/d");
}
$sql->selectall("answer where quiz_id=$quiz_id and type =6 and date1='$date' $far or quiz_id=$quiz_id and type =7 and date1='$date'   $far or quiz_id=$quiz_id and type =8 and date1='$date' $far limit 25 offset $id ");

////////////////////////////////
}else if (isset($_GET['month']) and $_GET['month']=='list') {
/////////////////////////////////


 if (isset($_GET['month1'])) {
$date=$_GET['month1'];
$year1=$_GET['year1'];
}else{
    $date=date("m");
$year1=date("Y");
}



$sql->selectall("answer where quiz_id=$quiz_id and type =6 and year(date1)='$year1' and month(date1)='$date' $far or quiz_id=$quiz_id and type =7 and year(date1)='$year1' and month(date1)='$date' $far or quiz_id=$quiz_id and type =8 and year(date1)='$year1' and month(date1)='$date' $far limit 25 offset $id");

////////////////////////////



}else if (isset($_GET['week']) and $_GET['week']=='list') {



    //////////////////////////////////////
     if (isset($_GET['week1'])) {
$date_last=$_GET['week1_last'];
$week1=$_GET['week1'];
$sql->selectall("answer where quiz_id=$quiz_id and type =6 and date1 between '$week1' and  '$date_last' $far or quiz_id=$quiz_id and type =7 and date1 between '$week1' and '$date_last' $far or quiz_id=$quiz_id and type =8 and date1 between '$week1' and '$date_last' $far limit 25 offset $id");


}else{
$week1=date("Y/m/d");
$date_last=date_create($week1);
        date_sub($date_last,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date_last,"Y/m/d");
        $sql->selectall("answer where  quiz_id=$quiz_id and type =6 and date1 between '$date_last' and '$week1' $far or quiz_id=$quiz_id and type =7 and date1 between '$date_last' and '$week1' $far or quiz_id=$quiz_id and type =8 and date1 between '$date_last' and '$week1' $far limit 25 offset $id");

}





///////////////////////////////////


}else if (isset($_GET['year']) and $_GET['year']=='list') {
       if (isset($_GET['year1'])) {
           $date=$_GET['year1'];
       }else{
       	$date=date("Y");
       }
$sql->selectall("answer where quiz_id=$quiz_id and type =6 and year(date1)='$date' $far  or quiz_id=$quiz_id and type=7 and year(date1)='$date' $far or quiz_id=$quiz_id and type=8 and year(date1)='$date' $far limit 25 offset $id");

}
         
$x=$id+1;
while ($row=$sql->res->fetch_assoc()) {
	


	$type=$row['type'];
	if ($type==6) {
		$name=$row['number'];
		
	}elseif ($type==7) {
		$name=$row['char1'];
	}elseif ($type==8) {
		$name=$row['text'];
	}
$date1=$row['date1'];

$time1=date_create($row['time1']);
$time2= date_format($time1,"h:i:s A");

	echo '
    <div class="CurveBox" align="right" style="background-color: #ffffff; margin-top: 10px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
        <div style="position: absolute; top: 3px; right: 8px; font-size: 12px; color: #aaaaaa;">'.$x++.'</div>
        <div dir="ltr" style="position: absolute; top: 3px; left: 8px; font-size: 12px; color: #aaaaaa;">'.$date1.'&nbsp;&nbsp;&nbsp;'.$time2.'</div>
       '.$name.'
    </div>';
}


if (isset($_GET['day']) and $_GET['day']=='list' ) {

if (isset($_GET['day1'])) {
  $date=$_GET['day1'];
}else{
   $date=date("Y/m/d");
}
$sql->selectall("answer where quiz_id=$quiz_id and type =6 and date1='$date' $far or quiz_id=$quiz_id and type =7 and date1='$date'  $far  or quiz_id=$quiz_id and type =8 and date1='$date' $far");

////////////////////////////////
}else if (isset($_GET['month']) and $_GET['month']=='list') {
/////////////////////////////////


 if (isset($_GET['month1'])) {
$date=$_GET['month1'];
$year1=$_GET['year1'];
}else{
    $date=date("m");
$year1=date("Y");
}
$sql->selectall("answer where quiz_id=$quiz_id and type =6 and year(date1)='$year1' and month(date1)='$date' $far or quiz_id=$quiz_id and type =7 and year(date1)='$year1' and month(date1)='$date' $far or quiz_id=$quiz_id and type =8 and year(date1)='$year1' and month(date1)='$date' $far ");


////////////////////////////



}else if (isset($_GET['week']) and $_GET['week']=='list') {



    //////////////////////////////////////
     if (isset($_GET['week1'])) {
$date_last=$_GET['week1_last'];
$week1=$_GET['week1'];
$sql->selectall("answer where quiz_id=$quiz_id and type =6 and date1 between '$week1'  and'$date_last' $far or quiz_id=$quiz_id and type =7 and date1 between '$week1' and '$date_last' $far or quiz_id=$quiz_id and type =8 and date1 between '$week1' and '$date_last' $far");


}else{
$week1=date("Y/m/d");
$date_last=date_create($week1);
        date_sub($date_last,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date_last,"Y/m/d");
        $sql->selectall("answer where  quiz_id=$quiz_id and type =6 and date1 between '$date_last' and '$week1' $far or quiz_id=$quiz_id and type =7 and date1 between '$date_last' and '$week1' $far or quiz_id=$quiz_id and type =8 and date1 between '$date_last' and '$week1' $far ");

}





///////////////////////////////////


}else if (isset($_GET['year']) and $_GET['year']=='list') {
       if (isset($_GET['year1'])) {
           $date=$_GET['year1'];
       }else{
       	$date=date("Y");
       }


}
$get=$_GET;
$array=[];
foreach ($get as $key => $value) {
    array_push($array, $key."=".$value);
}

$imp=implode("&", $array);
if ($sql->res->num_rows>=25+$id) {

$page1=$page+2;
  echo '<div id="moreResultsDiv_'.$quiz_id.'">
              <button class="WhiteButton" style="width: 120px; margin-top: 15px;" onclick="showMoreResults2('.$page1.','.$quiz_id.','.$offset.',`'.$imp.'`);">
            <font>&nbsp;&nbsp;المزيد&nbsp;&nbsp;</font>
            <img src="images/arrowDown.png" style="height: 20px; filter: invert(0.7);">
        </button>
    </div>';
}
?>
