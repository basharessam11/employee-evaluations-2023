   <?php
include"inc/sql.php";

$page=filter_var($_POST['page'], FILTER_VALIDATE_INT)-1;

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
if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];
  $sql->selectall("org where date1='$date' $far limit 25 offset $id");
}else{
   
$sql->selectall("org where date1='$date' limit 25 offset $id");
}


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


if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];

  $sql->selectall("org where year(date1)='$year1' and month(date1)='$date' $far limit 25 offset $id");
}else{
   
  $sql->selectall("org where year(date1)='$year1' and month(date1)='$date' limit 25 offset $id");

}



////////////////////////////



}else if (isset($_GET['week']) and $_GET['week']=='list') {



    //////////////////////////////////////
     if (isset($_GET['week1'])) {
$date_last=$_GET['week1_last'];
$week1=$_GET['week1'];
if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];

  
  $sql->selectall("org where  date1 between '$week1' and '$date_last' $far limit 25 offset $id");
}else{
   
 $sql->selectall("org where  date1 between '$week1' and '$date_last' limit 25 offset $id");

}
}else{
     $week1=date("Y/m/d");
$date_last1=date_create( $week1);
        date_sub($date_last1,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date_last1,"Y/m/d");
     

        if (isset($_GET["far"] )and !empty($_GET['far']) and $_GET['far'] !=0 ) {
  $far='and far_id='.$_GET["far"];

  


  $sql->selectall("org where  date1 between '$date_last' and '$week1' $far limit 25 offset $id ");
}else{
   
$sql->selectall("org where  date1 between '$date_last' and '$week1' limit 25 offset $id ");

}
}




///////////////////////////////////


}else if (isset($_GET['year']) and $_GET['year']=='list') {
       if (isset($_GET['year1'])) {
           $date=$_GET['year1'];
       }else{
         $date=date("Y/m/d");
       }


  if (isset($_GET["far"] )and !empty($_GET['far']) and $_GET['far'] !=0 ) {
  $far='and far_id='.$_GET["far"];

  


 
  $sql->selectall("org where year(date1)='$date' $far limit 25 offset $id");
}else{
   
$sql->selectall("org where year(date1)='$date' limit 25 offset $id");

}

}



$x=$id+1;
while ($row1=$sql->res->fetch_assoc()) {
$org_id=$row1['org_id'];
$org_id1=$row1['id'];
$date1=$row1['date1'];

$time1=date_create($row1['time1']);
$time2= date_format($time1,"h:i:s A");

?>

         <div class="CurveBox" id="customer_<?=$org_id1?>_answers"
            style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div
               style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">
               <?=$x++?></div>
            <div dir="ltr"
               style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
               <img src="images/threeDots_icon.png"
                  style="width: 20px; margin-right: 20px; cursor: pointer;"
                  onclick="$('#delete_icon_<?=$org_id1?>').toggle('fast');">

               <img id="delete_icon_<?=$org_id1?>"
                  src="images/delete_icon.png"
                  style="width: 16px; margin-right: 20px; display: none; cursor: pointer;"
                  onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(<?=$org_id1?>);} else {$('#delete_icon_11335').hide('fast');}">

             <?= $date1."&nbsp;&nbsp;&nbsp;".$time2?>   
            </div>

            

            <?php
$sql->select1("answer"," where org_id =$org_id1 order by id ");
      while ($row=$sql->res1->fetch_assoc()) {
   $id=$row['id'];
   $name=$row['quiz_name'];
   
   $type=$row['type'];
   $phone=$row['phone'];
   $email=$row['email'];

   $optional=$row['optional'];
   $value=$row['value'];
   $char1=$row['char1'];
   $text=$row['text'];
   $number=$row['number'];
$far_id=$row['far_id'];

if ($type==1) {
   
   

?><hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>
            <table
               style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
               <tbody>
                  <tr align="center">
                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==100) {
      echo 'face1select.png';
   }else{
 echo 'face1.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==75) {
      echo 'face2select.png';
   }else{
 echo 'face2.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==50) {
      echo 'face3select.png';
   }else{
 echo 'face3.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==25) {
      echo 'face4select.png';
   }else{
 echo 'face4.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==1) {
      echo 'face5select.png';
   }else{
 echo 'face5.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                  </tr>
               </tbody>
            </table>
          

            <?php
}else if ($type==2) {
  

  ?><hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>
            <table
               style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
               <tbody>
                  <tr align="center">
                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==100) {
      echo 'face1select.png';
   }else{
 echo 'face1.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>

                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==50) {
      echo 'face3select.png';
   }else{
 echo 'face3.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>

                     <td style="width: 20%;">
                        <img src="images/<?php

if ($value==1) {
      echo 'face5select.png';
   }else{
 echo 'face5.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                  </tr>
               </tbody>
            </table>

          

            <?php
}else if ($type==3) {
  

  ?>
<hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>
            <table
               style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
               <tbody>
                  <tr align="center">
                     <td style="width: 33%;">
                        <img src="images/<?php

if ($value==1) {
      echo 'ques1select.png';
   }else{
 echo 'ques1.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                     <td style="width: 34%;">
                        <img src="images/<?php

if ($value==2) {
      echo 'ques2select.png';
   }else{
 echo 'ques2.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                     <td style="width: 33%;">
                        <img src="images/<?php

if ($value==3) {
      echo 'ques3select.png';
   }else{
 echo 'ques3.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                  </tr>
               </tbody>
            </table>
           

            <?php
}else if ($type==4) {
  

  ?><hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>
            <table
               style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
               <tbody>
                  <tr align="center">
                     <td style="width: 33%;">
                        <img src="images/<?php

if ($value==1) {
      echo 'ques1select.png';
   }else{
 echo 'ques1.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>

                     <td style="width: 33%;">
                        <img src="images/<?php

if ($value==3) {
      echo 'ques3select.png';
   }else{
 echo 'ques3.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                  </tr>
               </tbody>
            </table>
         

            <?php
}else if ($type==5) {
  

  ?><hr style="margin-top: 5px;">

            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>
            <table
               style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
               <tbody>
                  <tr align="center">
                     <td style="width: 50%;">
                        <img src="images/<?php

if ($value==1) {
      echo 'logicChoice1select.png';
   }else{
 echo 'logicChoice1.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                     <td style="width: 50%;">
                        <img src="images/<?php

if ($value==3) {
      echo 'logicChoice3select.png';
   }else{
 echo 'logicChoice3.png';
   }
            ?>" style="width: 30px; max-width: 100%;">
                     </td>
                  </tr>
               </tbody>
            </table>
           

            <?php
}else if ($type==6) {
  

  ?><hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>

            <div align="right"
               style="padding: 10px 10px 5px 10px; color: #088908;">
               <?=$number?></div>
            

            <?php
}else if ($type==7) {
  

  ?><hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>

            <div align="right"
               style="padding: 10px 10px 5px 10px; color: #088908;">
               <?=$char1?></div>

            

            <?php
}else if ($type==8) {
  

  ?>
<hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>

            <div align="right"
               style="padding: 10px 10px 5px 10px; color: #088908;">
               <?=$text?></div>

           
            <?php
}else if ($type==9) {
  

  ?>
<hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;"><?=$name?>
            </div>

            <div align="right"
               style="padding: 10px 10px 5px 10px; color: #088908;">
               <?php


$sql->select2("far"," where id = $far_id ");
      while ($row2=$sql->res2->fetch_assoc()) {


echo $row2['name'];
}
               ?></div>

           
            <?php
}




}



?>
         </div>
         <?php
}
?>


 <?php

if (isset($_GET['day']) and $_GET['day']=='list' ) {

if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];

  $sql->selectall("org where date1='$date' $far");
}else{
   
$sql->selectall("org where date1='$date'");
}


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
if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];


  $sql->selectall("org where year(date1)='$year1' and month(date1)='$date' $far");
}else{
   
$sql->selectall("org where year(date1)='$year1' and month(date1)='$date'");
}






////////////////////////////



}else if (isset($_GET['week']) and $_GET['week']=='list') {



    //////////////////////////////////////
     if (isset($_GET['week1'])) {
$date_last=$_GET['week1_last'];
$week1=$_GET['week1'];
$sql->selectall("org where  date1 between '$week1' and '$date_last' ");
}else{
$week1=date("Y/m/d");
$date_last1=date_create( $week1);
        date_sub($date_last1,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date_last1,"Y/m/d");


        if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];



  $sql->selectall("org where  date1 between '$date_last' and '$week1' $far");
}else{
   
$sql->selectall("org where  date1 between '$date_last' and '$week1' ");
}

        
}




///////////////////////////////////


}else if (isset($_GET['year']) and $_GET['year']=='list') {
       if (isset($_GET['year1'])) {
           $date=$_GET['year1'];
       }

     if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];




  $sql->selectall("org where year(date1)='$date' $far");
}else{
   
$sql->selectall("org where year(date1)='$date'");
}

}
$get=$_GET;
$array=[];
foreach ($get as $key => $value) {
    array_push($array, $key."=".$value);
}

$imp=implode("&", $array);
if ($sql->res->num_rows>=25+$id) {



  echo '<div id="moreResultsDiv">
        <button class="WhiteButton" id="moreResultsButton" style="width: 180px;" onclick="showMoreResults1('.$page+2 .', `'.$imp.'`);">
            <font>&nbsp;&nbsp;المزيد من النتائج&nbsp;&nbsp;</font>
            <img src="images/arrowDown.png" style="height: 20px; filter: invert(0.7);">
        </button>
    </div>';
}

?>