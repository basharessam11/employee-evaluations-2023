<div class="CurveBox20 Shadow1"
   style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">

   <div>
      <font>تقييمات العملاء</font>

      <table
         style="width: 90%; border-collapse: separate; border-spacing: 5px;">
         <tbody>
            <tr align="center" style="height: 45px;">
               <td class="CurveBox5"

                  

                  style="width: 33%; background-color: <?php  
if (isset($_GET['rate']) and $_GET['rate']=='list'  ) {
    echo'#6dba82';
    $on='';
    
}else{
    echo 'rgb(221, 221, 221)';
    $on='onmouseout="this.style.backgroundColor = &#39;rgb(221, 221, 221)&#39;;"';
}

               ?>; padding-top: 7px; cursor: pointer;"
              onmouseover="this.style.backgroundColor = &#39;#6dba82&#39;;"
                  <?=$on?>


                  <?php

if (isset($_GET['far'])and !empty($_GET['far'])) {
 $f="far=".$_GET['far'].'&';
}else{
 $f="";

}
                  ?>
                   onclick="window.location = 'index.php?<?=$f?>rate=list&day=list';"
               >
                  تقييمات الأفراد</td>

               <td class="CurveBox5"
                 
style="width: 33%; background-color: <?php  
if (isset($_GET['write']) and $_GET['write']=='list'  ) {
    echo'#6dba82';
    $on='';
    
}else{
    echo 'rgb(221, 221, 221)';
    $on='onmouseout="this.style.backgroundColor = &#39;rgb(221, 221, 221)&#39;;"';
}

               ?>; padding-top: 7px; cursor: pointer;"
              onmouseover="this.style.backgroundColor = &#39;#6dba82&#39;;"
                  <?=$on?>
                   onclick="window.location = 'index.php?<?=$f?>write=list&day=list';"
                 >
                  الإجابات الكتابية</td>

               <td class="CurveBox5"

style="width: 33%; background-color: <?php  
if (isset($_GET['stat']) and $_GET['stat']=='list'  ) {
    echo'#6dba82';
    $on='';
    
}else{
    echo 'rgb(221, 221, 221)';
    $on='onmouseout="this.style.backgroundColor = &#39;rgb(221, 221, 221)&#39;;"';
}

               ?>; padding-top: 7px; cursor: pointer;"
              onmouseover="this.style.backgroundColor = &#39;#6dba82&#39;;"
                  <?=$on?>
                   onclick="window.location = 'index.php?<?=$f?>stat=list&day=list';"
>
                  الإجابات الإحصائية</td>
            </tr>
         </tbody>
      </table>

      <table
         style="width: 90%; margin-top: 20px; border-collapse: separate; border-spacing: 5px;">
         <tbody>
            <tr align="center" style="height: 28px;">
               <td class="CurveBox5"
                  style="width: 25%; background-color: <?php  
if (isset($_GET['day']) and $_GET['day']=='list'  ) {
    echo'#ffba00';
    $on='';
    
}else{
    echo '#dddddd';
    $on='onmouseout="this.style.backgroundColor = &#39;#dddddd&#39;;"';
}

               ?>; padding-top: 4px; cursor: pointer;"
               onmouseover="this.style.backgroundColor = &#39;#ffba00&#39;;"
                  <?=$on?>
                   onclick="window.location = 'index.php?<?=$f?>rate=list&day=list';">يوم</td>

               <td class="CurveBox5"
                  style="width: 25%; background-color: <?php  
if (isset($_GET['week']) and $_GET['week']=='list'  ) {
  echo'#ffba00';
    $on='';
    
}else{
    echo '#dddddd';
    $on='onmouseout="this.style.backgroundColor = &#39;#dddddd&#39;;"';
}

               ?>; padding-top: 4px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor = &#39;#ffba00&#39;;"
                 <?=$on?>
                  onclick="window.location = 'index.php?<?=$f?>rate=list&week=list';"
                  >أسبوع
               </td>

               <td class="CurveBox5"
                  style="width: 25%; background-color: <?php  
if (isset($_GET['month']) and $_GET['month']=='list'  ) {
  echo'#ffba00';
    $on='';
    
}else{
    echo '#dddddd';
    $on='onmouseout="this.style.backgroundColor = &#39;#dddddd&#39;;"';
}

               ?>; padding-top: 5px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor = &#39;#ffba00&#39;;"
                 <?=$on?>
                  onclick="window.location = 'index.php?<?=$f?>rate=list&month=list';"
                  >شهر</td>

               <td class="CurveBox5"
                  style="width: 25%; background-color: <?php  
if (isset($_GET['year']) and $_GET['year']=='list'  ) {
  echo'#ffba00';
    $on='';
    
}else{
    echo '#dddddd';
    $on='onmouseout="this.style.backgroundColor = &#39;#dddddd&#39;;"';
}

               ?>; padding-top: 5px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor = &#39;#ffba00&#39;;"
                  <?=$on?>

                  onclick="window.location = 'index.php?<?=$f?>rate=list&year=list';"
                  >سنة</td>
            </tr>
         </tbody>
      </table>

      <div style="margin-top: 30px; margin-right: 15px;">
         <div
            style="margin-right: 10px; margin-left: 20px; margin-bottom: 30px;">
            <table style="width: 100%;">
               <tbody>


<?php
if (isset($_GET['day']) and $_GET['day']=='list') {

    if (isset($_GET['day1']) ) {
       $date=$_GET['day1'];
       $date22=date_create($date);
        date_sub($date22,date_interval_create_from_date_string("1 days"));
        $date1= date_format($date22,"Y/m/d");

         $dater = strtotime($date);
$dater = strtotime("+1 day", $dater);
$date2= date('Y/m/d', $dater);

    }else{
        $date=date("Y/m/d");

        $date22=date_create($date);
        date_sub($date22,date_interval_create_from_date_string("1 days"));
        $date1= date_format($date22,"Y/m/d");


        $dater = strtotime($date);
$dater = strtotime("+1 day", $dater);
$date2= date('Y/m/d', $dater);
    }
    ?>

 <tr>
   <td align="left" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
         onclick="window.location = 'index.php?<?=$f?>rate=list&day=list&day1=<?=$date1?>';"
         onmouseover="this.style.webkitFilter = &#39;invert(0.5)&#39;;"
         onmouseout="this.style.webkitFilter = &#39;none&#39;;">
         <img src="images/arrowRight.png"
            style="width: 25px; filter: invert(0.7);">
      </div>
   </td>
   <td align="center"
      style="width: 50%; min-width: 200px; vertical-align: middle;">

      <?php
      $dayname = array(
    'Sunday'=>"الاحد",
    'Monday'=>"الاثنين" ,
    'Tuesday'=>"الثلاثاء" ,
    'Wednesday'=>"الاربعاء" ,
    'Thursday'=>"الخميس" ,
    'Friday'=>"الجمعة" ,
    'Saturday'=>"السبت" ,
 );

$date22=date_create(  $date);
$dddd= date_format($date22,"l");
echo$dayname[$dddd]; 


      ?>   
      <br><?=$date?></td>
   <td align="right" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
         onclick="window.location = 'index.php?<?=$f?>rate=list&day=list&day1=<?=$date2?>';"
         onmouseover="this.style.webkitFilter = &#39;invert(0.5)&#39;;"
         onmouseout="this.style.webkitFilter = &#39;none&#39;;">
         <img src="images/arrowLeft.png"
            style="width: 25px; filter: invert(0.7);">
      </div>
   </td>
</tr>

    <?php
}elseif (isset($_GET['month']) and $_GET['month']=='list') {
        if (isset($_GET['month1']) ) {
       $date=$_GET['month1']-1;
        $year1=$_GET['year1'];
       if ($date==0) {
           $date=12;
            $year1=$_GET['year1']-1;
       }

       

    }else{
        $date=date("m")-1;
        $year1=date("Y");
    }





        if (isset($_GET['month1']) ) {

       $date2=$_GET['month1']+1;
        $year2=$_GET['year1'];
       if ($date2==13) {
           $date2=1;
           $year2=$_GET['year1']+1;
       }

       
    }else{
        $date2=date("m")+1;
        $year2=date("Y");
    }

   ?>

<tr>
   <td align="left" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
        onclick="window.location = 'index.php?<?=$f?>rate=list&month=list&year1=<?=$year1?>&month1=<?=$date?>';"
         onmouseover="this.style.webkitFilter = 'invert(0.5)';"
         onmouseout="this.style.webkitFilter = 'none';"><img
            src="images/arrowRight.png"
            style="width: 25px; filter: invert(0.7);"></div>
   </td>
   <td align="center"
      style="width: 50%; min-width: 200px; vertical-align: middle;">
      <?php
      if (isset($_GET['month1']) ) {
      $date4=$_GET['month1'];
  }else{
    $date4=date("m");
  }
if ($date4==1) {
  echo'يناير';
}elseif ($date4==2) {
    echo'فبراير';
}elseif ($date4==3) {
    echo'مارس';
}elseif ($date4==4) {
    echo'أبريل';
}elseif ($date4==5) {
    echo'مايو';
}elseif ($date4==6) {
    echo'يونيو';
}elseif ($date4==7) {
    echo'يوليو';
}elseif ($date4==8) {
    echo'أغسطس';
}elseif ($date4==9) {
    echo'سبتمبر';
}elseif ($date4==10) {
    echo'أكتوبر';
}elseif ($date4==11) {
    echo'نوفمبر';
}elseif ($date4==12) {
    echo'ديسمبر';
}

      ?><br><?php

if (isset($_GET['year1']) ) {
      echo $_GET['year1'];
  }else{
    echo date("Y");
  }
      ?></td>
   <td align="right" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
         onclick="window.location = 'index.php?<?=$f?>rate=list&month=list&year1=<?=$year2?>&month1=<?=$date2?>';"
         onmouseover="this.style.webkitFilter = 'invert(0.5)';"
         onmouseout="this.style.webkitFilter = 'none';"><img
            src="images/arrowLeft.png"
            style="width: 25px; filter: invert(0.7);"></div>
   </td>
</tr>
   <?php
}elseif (isset($_GET['week']) and $_GET['week']=='list') {

       if (isset($_GET['week1']) ) {
       $date=$_GET['week1'];

       $date_last1=$_GET['week1_last'];
       $date22=date_create($date);
        date_sub($date22,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date22,"Y/m/d");


            
$dater = strtotime($date_last1);
$dater = strtotime("+6 day", $dater);
$date_in= date('Y/m/d', $dater);
    }else{
        $date=date("Y/m/d");
       $date_last1=$date;
        
        
$date22=date_create($date_last1);
        date_sub($date22,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date22,"Y/m/d");



$dater = strtotime($date);
$dater = strtotime("+6 day", $dater);
$date_in= date('Y/m/d', $dater);



    }

   ?>

<tr>
   <td align="left" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
          onclick="window.location = 'index.php?<?=$f?>rate=list&week=list&week1=<?=$date_last?>&week1_last=<?=$date?>';"
         onmouseover="this.style.webkitFilter = 'invert(0.5)';"
         onmouseout="this.style.webkitFilter = 'none';"><img
            src="images/arrowRight.png"
            style="width: 25px; filter: invert(0.7);"></div>
   </td>
   <td align="center"
      style="width: 50%; min-width: 200px; vertical-align: middle;">
      <div style="display: inline-block;">من <?php
      $dayname = array(
    'Sunday'=>"الاحد",
    'Monday'=>"الاثنين" ,
    'Tuesday'=>"الثلاثاء" ,
    'Wednesday'=>"الاربعاء" ,
    'Thursday'=>"الخميس" ,
    'Friday'=>"الجمعة" ,
    'Saturday'=>"السبت" ,
 );
if (isset($_GET['week1']) ) {
       $dateweek1=$_GET['week1'];
              
       
   }else{
    $dateweek1=date("Y/m/d");

    $date22=date_create($dateweek1);
        date_sub($date22,date_interval_create_from_date_string("6 days"));
        $dateweek1= date_format($date22,"Y/m/d");
   }
$date22=date_create(  $dateweek1);
$dddd= date_format($date22,"l");
echo$dayname[$dddd]; 


      ?>    <font dir="ltr"> 
        <?=$dateweek1?>
            </font>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;<div
         style="display: inline-block;">الي <?php

   
if (isset($_GET['week1']) ) {
       $dateweek1=$_GET['week1_last'];
              
       
   }else{
    $dateweek1=date("Y/m/d");

    
   }
$date22=date_create($dateweek1);
$dddd= date_format($date22,"l");

echo$dayname[$dddd];

      ?> <font dir="ltr"> 
           <?=$dateweek1?></font>
      </div>
   </td>
   <td align="right" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
         onclick="window.location = 'index.php?<?=$f?>rate=list&week=list&week1=<?=$date_last1?>&week1_last=<?=$date_in?>';"
         onmouseover="this.style.webkitFilter = 'invert(0.5)';"
         onmouseout="this.style.webkitFilter = 'none';"><img
            src="images/arrowLeft.png"
            style="width: 25px; filter: invert(0.7);"></div>
   </td>
</tr>
   <?php
}elseif (isset($_GET['year']) and $_GET['year']=='list') {
    if (isset($_GET['year1']) ) {
       $date=$_GET['year1'];
    }else{
        $date=date("Y");
    }
   ?>
<tr>
   <td align="left" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
        onclick="window.location = 'index.php?<?=$f?>rate=list&year=list&year1=<?=$date-1?>';"
         onmouseover="this.style.webkitFilter = 'invert(0.5)';"
         onmouseout="this.style.webkitFilter = 'none';"><img
            src="images/arrowRight.png"
            style="width: 25px; filter: invert(0.7);"></div>
   </td>
   <td class="year" align="center"
      style="width: 50%; min-width: 200px; vertical-align: middle;">
      <?=$date?>
          
      </td>
   <td align="right" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"

        onclick="window.location = 'index.php?<?=$f?>rate=list&year=list&year1=<?=$date+1?>';"
         onmouseover="this.style.webkitFilter = 'invert(0.5)';"
         onmouseout="this.style.webkitFilter = 'none';"><img
            src="images/arrowLeft.png"
            style="width: 25px; filter: invert(0.7);"></div>
   </td>
</tr>
   <?php
}



if (isset($_GET['day']) and $_GET['day']=='list' ) {

if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];
  $sql->selectall("org where date1='$date' $far limit 25 offset 0");
}else{
   
$sql->selectall("org where date1='$date' limit 25 offset 0");
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

  $sql->selectall("org where year(date1)='$year1' and month(date1)='$date' $far limit 25 offset 0");
}else{
   
  $sql->selectall("org where year(date1)='$year1' and month(date1)='$date' limit 25 offset 0");

}




////////////////////////////



}else if (isset($_GET['week']) and $_GET['week']=='list') {



    //////////////////////////////////////
     if (isset($_GET['week1'])) {
$date_last=$_GET['week1_last'];
$week1=$_GET['week1'];

if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];

  
  $sql->selectall("org where  date1 between '$week1' and '$date_last' $far limit 25 offset 0");
}else{
   
 $sql->selectall("org where  date1 between '$week1' and '$date_last' limit 25 offset 0");

}

}else{
     $week1=date("Y/m/d");
$date_last1=date_create( $week1);
        date_sub($date22,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date22,"Y/m/d");
     

        if (isset($_GET["far"] )and !empty($_GET['far']) and $_GET['far'] !=0 ) {
  $far='and far_id='.$_GET["far"];

  


  $sql->selectall("org where  date1 between '$date_last' and '$week1' $far limit 25 offset 0 ");
}else{
   
$sql->selectall("org where  date1 between '$date_last' and '$week1' limit 25 offset 0 ");

}
}




///////////////////////////////////


}else if (isset($_GET['year']) and $_GET['year']=='list') {
       if (isset($_GET['year1'])) {
           $date=$_GET['year1'];
       }
  if (isset($_GET["far"] )and !empty($_GET['far']) and $_GET['far'] !=0 ) {
  $far='and far_id='.$_GET["far"];

  


 
  $sql->selectall("org where year(date1)='$date' $far limit 25 offset 0");
}else{
   
$sql->selectall("org where year(date1)='$date' limit 25 offset 0");

}


}
             ?>    


               </tbody>
            </table>

<br>
<table style="width: 100%;">
  
  <tbody >
    <tr>

   <td align="center"  style="vertical-align: middle; width: 100%;">
<?php

 echo '<div>

    <select style="width: 50%;" class="far form-control" >
            <option value="0">اختر الفرع</option>';

    

 $sql->select3("far","");

 while ($row5=$sql->res3->fetch_assoc()) {
  if (isset($_GET['far'])and !empty($_GET['far'])) {
    if ($_GET['far']==$row5["id"]) {
      $f='selected';
    }else{
  $f ='';
}
 
}else{
  $f ='';
}
    echo '<option '.$f.' value="'.$row5["id"].'">'.$row5["name"].'</option>';
 }
  





echo' </select> </div>';

?>
  </td>


  <?php

if (isset($_GET['far'])) {
  echo'<input class="fff" type="hidden" value="far='.$_GET['far'].'&">';
}else{
  echo'<input class="fff" type="hidden" value="">';
}

  ?>
<script type="text/javascript">
  
$(".far").change(function(event) {
 var far=$(this).val();
 var get=$(".get").val();
 var fff=$(".fff").val();

 console.log(get)
 var loc=get.replace(fff, "far="+far+"&");
window.location="index.php?"+loc;



});

</script>
  
</tr>
  </tbody>
</table>


         </div>

         <!-- ////////////////////////////////// -->
<div align="center" style="font-size: 12px; color: #aaaaaa;">عدد الإجابات: <?=$sql->res->num_rows?></div>
         <?php



if ($sql->res->num_rows!=0) {
    # code...
$x=1;
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

              <?= $date1."&nbsp;&nbsp;&nbsp;".$time2?>             </div>

            

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
}else{
    echo '<div style="margin-left: 15px; font-size: 12px; color: #aaaaaa;">لا يوجد تقييمات!</div>    </div>';
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
$date_last1=date_create($date);
        date_sub($date22,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date22,"Y/m/d");


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
echo'<input class="get" type="hidden" value="'.$imp.'" >';
if ($sql->res->num_rows>=25) {

// print_r($_GET) ;


  echo '<div id="moreResultsDiv">
        <button class="WhiteButton" id="moreResultsButton" style="width: 180px;" onclick="showMoreResults1(2, `'.$imp.'`);">
            <font>&nbsp;&nbsp;المزيد من النتائج&nbsp;&nbsp;</font>
            <img src="images/arrowDown.png" style="height: 20px; filter: invert(0.7);">
        </button>
    </div>';
}

?>
         <!-- ///////////////////////  -->
      </div>

   </div>
</div>

</div>