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




<!-- ///////// -->






                  <?php

if (isset($_GET['far'])and !empty($_GET['far'])) {
 $f="far=".$_GET['far'].'&';
}else{
 $f="";

}
                  ?>
 
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
                   onclick="window.location = 'index.php?<?=$f?>stat=list&day=list';">يوم</td>

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
                  onclick="window.location = 'index.php?<?=$f?>stat=list&week=list';"
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
                  onclick="window.location = 'index.php?<?=$f?>stat=list&month=list';"
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

                  onclick="window.location = 'index.php?<?=$f?>stat=list&year=list';"
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
         onclick="window.location = 'index.php?<?=$f?>stat=list&day=list&day1=<?=$date1?>';"
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
         onclick="window.location = 'index.php?<?=$f?>stat=list&day=list&day1=<?=$date2?>';"
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
        onclick="window.location = 'index.php?<?=$f?>stat=list&month=list&year1=<?=$year1?>&month1=<?=$date?>';"
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
         onclick="window.location = 'index.php?<?=$f?>stat=list&month=list&year1=<?=$year2?>&month1=<?=$date2?>';"
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
        
        
$date22=date_create( $date_last1);
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
          onclick="window.location = 'index.php?<?=$f?>stat=list&week=list&week1=<?=$date_last?>&week1_last=<?=$date?>';"
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
$date22=date_create( $dateweek1);
$dddd= date_format($date22,"l");

echo$dayname[$dddd];

      ?> <font dir="ltr"> 
           <?=$dateweek1?></font>
      </div>
   </td>
   <td align="right" style="vertical-align: middle;">
      <div style="width: 30px; cursor: pointer;"
         onclick="window.location = 'index.php?<?=$f?>stat=list&week=list&week1=<?=$date_last1?>&week1_last=<?=$date_in?>';"
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
        onclick="window.location = 'index.php?<?=$f?>stat=list&year=list&year1=<?=$date-1?>';"
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

        onclick="window.location = 'index.php?<?=$f?>stat=list&year=list&year1=<?=$date+1?>';"
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
 
  $sql->selectall("answer where type =1 and date1='$date' $far  or type =2 and date1='$date' $far  or type =3 and date1='$date' $far  or type =4 and date1='$date' $far  or type =5 and date1='$date' $far");
}else{
   
$sql->selectall("answer where type =1 and date1='$date' or type =2 and date1='$date' or type =3 and date1='$date' or type =4 and date1='$date' or type =5 and date1='$date' ");
}

$where ="date1='$date'";

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

$where ="year(date1)='$year1' and month(date1)='$date'";



if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];
 


  $sql->selectall("answer where  type =1 and year(date1)='$year1' and month(date1)='$date' $far or type =2 and year(date1)='$year1' and month(date1)='$date' $far or type =3 and year(date1)='$year1' and month(date1)='$date' $far or type =4 and year(date1)='$year1' and month(date1)='$date' $far or  type =5 and year(date1)='$year1' and month(date1)='$date' $far");
}else{
   
$sql->selectall("answer where  type =1 and year(date1)='$year1' and month(date1)='$date' or type =2 and year(date1)='$year1' and month(date1)='$date' or type =3 and year(date1)='$year1' and month(date1)='$date' or type =4 and year(date1)='$year1' and month(date1)='$date' or type =5 and year(date1)='$year1' and month(date1)='$date' ");
}


////////////////////////////



}else if (isset($_GET['week']) and $_GET['week']=='list') {



    //////////////////////////////////////
     if (isset($_GET['week1'])) {
$date_last=$_GET['week1_last'];
$week1=$_GET['week1'];


if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];
 




 $sql->selectall("answer where  type =1 and date1 between '$week1' and '$date_last' $far or type =2 and date1 between '$week1' and '$date_last' $far or type =3 and date1 between '$week1' and '$date_last' $far or type =4 and date1 between '$week1' and '$date_last' $far or type =5 and date1 between '$week1' and '$date_last' $far   ");
}else{
   
$sql->selectall("answer where  type =1 and date1 between '$week1' and '$date_last' or type =2 and date1 between '$week1' and '$date_last' or type =3 and date1 between '$week1' and '$date_last' or type =4 and date1 between '$week1' and '$date_last' or type =5 and date1 between '$week1' and '$date_last'  ");
}




$where =" date1 between '$week1' and '$date_last'";

}else{
$week1=date("Y/m/d");
$$date_last1=date_create( $date);
        date_sub($date22,date_interval_create_from_date_string("6 days"));
        $date_last= date_format($date22,"Y/m/d");

if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];
 

 $sql->selectall("answer where  type =1 and date1 between '$date_last' and '$week1' $far or type =2 and date1 between '$date_last' and '$week1' $far or type =3 and date1 between '$date_last' and '$week1' $far or type =4 and date1 between '$date_last' and '$week1' $far or type =5 and date1 between '$date_last' and '$week1' $far ");
}else{
   
$sql->selectall("answer where  type =1 and date1 between '$date_last' and '$week1' or type =2 and date1 between '$date_last' and '$week1' or type =3 and date1 between '$date_last' and '$week1' or type =4 and date1 between '$date_last' and '$week1' or type =5 and date1 between '$date_last' and '$week1' ");
}

       

$where =" date1 between '$date_last' and '$week1'";

}





///////////////////////////////////


}else if (isset($_GET['year']) and $_GET['year']=='list') {
       if (isset($_GET['year1'])) {
           $date=$_GET['year1'];
       }



$where =" year(date1)='$date'";

$sql->selectall("answer where type =1 and year(date1)='$date'  or type =2 and year(date1)='$date'  or type =3 and year(date1)='$date'  or type =4 and year(date1)='$date'  or type =5 and year(date1)='$date'  ");
}
             ?>    


               </tbody>
            </table>


            
<br>
<table style="width: 100%;">
  
  <tbody>
    <tr>

   <td align="center" style="vertical-align: middle;">
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

if (isset($_GET['day']) and $_GET['day']=='list' ) {
 if (isset($_GET['month1'])) {
$date=$_GET['day1'];

}else{
    $date=date("Y/m/d");

}
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



       if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];




  $sql->selectall("org where  date1 between '$week1' and '$date_last' $far");
}else{
   
$sql->selectall("org where  date1 between '$week1' and '$date_last' ");
}


}else{
     $week1=date("Y/m/d");
$date_last1=date_create($week1);
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
echo'<input class="get" type="hidden" value="'.$imp.'" >';
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

         <?php
//          $array=[];
// while ($row=$sql->res->fetch_assoc()) {
//   if (!in_array($row['quiz_id'], $array)) {
//     array_push($array, $row['quiz_id']);
//   }
// }
// print_r($array);

if ($sql->res->num_rows!=0) {
    # code...
$x=1;


         
           
$sql->select1("quiz"," where type =1 or type=2 or type=3 or type=4 or type=5 order by id ");
      while ($row=$sql->res1->fetch_assoc()) {
    $id=$row['id'];

    $name=$row['name'];
   
    $type=$row['type'];
   // $phone=$row['phone'];
   // $email=$row['email'];

   // $optional=$row['optional'];
   // $value=$row['value'];
   // $char1=$row['char1'];
   // $text=$row['text'];
   // $number=$row['number'];

if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];
 

 $sql->select2("answer","where quiz_id=$id $far and $where");
 
}else{
   
 $sql->select2("answer","where quiz_id=$id and $where");
 $far='';
}


                    $num= $sql->res2->num_rows;


$sql->selectavg("value","answer","quiz_id=$id $far and $where
 ");
while ($row_avg=$sql->res_avg->fetch_assoc()) {
$avg=$row_avg['AVG(value)'];
}
if ($type==1 and $num>=1) {
 

?>


<div class="CurveBox" style="width: 96%; max-width: 600px; margin-top: 20px; padding: 10px 10px 3px 10px; background-color: #f1f1f1;">
        <div align="right"><?=$name?></div>
        <div class="CurveBox" align="left" style="width: 100%; height: 15px; background-color: #ffffff; border: solid 1px #919191; overflow: hidden;">
            <div style="width: <?=round($avg,1) ?>%;height: 100%;background-color: <?php

if ($avg<50) {
 echo '#ff0000';
}elseif ($avg<75) {
  echo'#ffe200';
}elseif ($avg>75) {
  echo'#7cc754';
}

            ?>;position: relative;">
                <div style="position: absolute; right: 4px; top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($avg,1) ?>%</b></font></div>
            </div>
        </div>
        <table style="width: 80%; margin-top: 10px;">
            <tbody><tr align="center">
                <td style="width: 20%;">
                    <img src="images/face1.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php

if (isset($_GET["far"] )and !empty($_GET['far'])and $_GET['far'] !=0) {
  $far='and far_id='.$_GET["far"];
 
}else{
   
$far='';
}

                    $sql->select2("answer","where quiz_id=$id $far and value=100  and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face2.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=75  and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face3.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=50 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face4.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=25 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face5.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=1 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
            </tr>
        </tbody></table>
        <div align="left" style="font-size: 12px; color: #aaaaaa;">عدد الإجابات: <?php
                    $sql->select2("answer","where quiz_id=$id $far  and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
    </div>

<?php
}elseif ($type==2 and $num>=1) {
  

?>

<div class="CurveBox" style="width: 96%; max-width: 600px; margin-top: 20px; padding: 10px 10px 3px 10px; background-color: #f1f1f1;">
        <div align="right"><?=$name?></div>
        <div class="CurveBox" align="left" style="width: 100%; height: 15px; background-color: #ffffff; border: solid 1px #919191; overflow: hidden;">
            <div style="width: <?=round($avg,1) ?>%;height: 100%;background-color: <?php

if ($avg<50) {
 echo '#ff0000';
}elseif ($avg<=75) {
  echo'#ffe200';
}elseif ($avg>=75) {
  echo'#7cc754';
}

            ?>;position: relative;">
                <div style="position: absolute; right: 4px; top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($avg,1) ?>%</b></font></div>
            </div>
        </div>
        <table style="width: 80%; margin-top: 10px;">
            <tbody><tr align="center">
                <td style="width: 20%;">
                    <img src="images/face1.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=100 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face2.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=75 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face3.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=50 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face4.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=25 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
                <td style="width: 20%;">
                    <img src="images/face5.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;"><?php
                    $sql->select2("answer","where quiz_id=$id $far and value=1 and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
                </td>
            </tr>
        </tbody></table>
        <div align="left" style="font-size: 12px; color: #aaaaaa;">عدد الإجابات: <?php
                    $sql->select2("answer","where quiz_id=$id $far  ");
                    echo $sql->res2->num_rows;
                    ?></div>
    </div>

<?php



}elseif ($type==3 and $num>=1 ) {
?>




<div class="CurveBox" style="width: 96%; max-width: 600px; margin-top: 20px; padding: 10px 10px 3px 10px; background-color: #f1f1f1;">
        <div align="right">هل تمت المعالجة بالشكل المطلوب ؟</div>
        <div class="CurveBox" align="center" style="width: 100%; height: 15px; background-color: #ffffff; border: solid 1px #919191; overflow: hidden;">


            <div style="width: <?php
$sql->selectsum("avg1","answer","quiz_id=$id $far  and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum1=$row_sum['SUM(avg1)'];
}

$sql->selectsum("avg1","answer","quiz_id=$id $far and value=1 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total1=($sum2/$sum1)*100;
echo round($total1,1);
            ?>%; height: 100%; background-color: #088908; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($total1,1);?>%</b></font></div>
            </div>


            <div style="width: <?php

$sql->selectsum("avg1","answer","quiz_id=$id $far and value=2 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total2=($sum2/$sum1)*100;
echo round($total2,1);
            ?>%; height: 100%; background-color: #ffe200; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #747474;"><b><?=round($total2,1);?>%</b></font></div>
            </div>


            <div style="width: <?php



$sql->selectsum("avg1","answer","quiz_id=$id $far and value=3 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total3=($sum2/$sum1)*100;
echo round($total3,1);
            ?>%; height: 100%; background-color: #ff0000; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($total3,1);?>%</b></font></div>
            </div>
        </div>
        <table style="width: 100%; margin-top: 10px;">
            <tbody><tr align="center">
               <td style="width: <?=round($total1,1);?>%; opacity: 1;">
                    <img src="images/ques1.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=1 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
                <td style="width: <?=round($total2,1);?>?>%; opacity: 1;">
                    <img src="images/ques2.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=2 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
                <td style="width: <?=round($total3,1);?>%; opacity: 1;">
                    <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=3 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
            </tr>
        </tbody></table>
        <div align="left" style="font-size: 12px; color: #aaaaaa;">عدد الإجابات: <?php
                    $sql->select2("answer","where quiz_id=$id $far  and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
    </div>



<?php



}elseif ($type==4 and $num>=1 ) {
?>




<div class="CurveBox" style="width: 96%; max-width: 600px; margin-top: 20px; padding: 10px 10px 3px 10px; background-color: #f1f1f1;">
        <div align="right">هل تمت المعالجة بالشكل المطلوب ؟</div>
        <div class="CurveBox" align="center" style="width: 100%; height: 15px; background-color: #ffffff; border: solid 1px #919191; overflow: hidden;">


            <div style="width: <?php
$sql->selectsum("avg1","answer","quiz_id=$id $far  and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum1=$row_sum['SUM(avg1)'];
}

$sql->selectsum("avg1","answer","quiz_id=$id $far and value=1 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total1=($sum2/$sum1)*100;
echo round($total1,1);
            ?>%; height: 100%; background-color: #088908; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($total1,1);?>%</b></font></div>
            </div>


            <div style="width: <?php

$sql->selectsum("avg1","answer","quiz_id=$id $far and value=2 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total2=($sum2/$sum1)*100;
echo round($total2,1);
            ?>%; height: 100%; background-color: #ffe200; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #747474;"><b><?=round($total2,1);?>%</b></font></div>
            </div>


            <div style="width: <?php



$sql->selectsum("avg1","answer","quiz_id=$id $far and value=3 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total3=($sum2/$sum1)*100;
echo round($total3,1);
            ?>%; height: 100%; background-color: #ff0000; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($total3,1);?>%</b></font></div>
            </div>
        </div>
        <table style="width: 100%; margin-top: 10px;">
            <tbody><tr align="center">
               <td style="width: <?=round($total1,1);?>%; opacity: 1;">
                    <img src="images/ques1.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=1 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
                <td style="width: <?=round($total2,1);?>?>%; opacity: 1;">
                    <img src="images/ques2.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=2 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
                <td style="width: <?=round($total3,1);?>%; opacity: 1;">
                    <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=3 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
            </tr>
        </tbody></table>
        <div align="left" style="font-size: 12px; color: #aaaaaa;">عدد الإجابات: <?php
                    $sql->select2("answer","where quiz_id=$id $far and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
    </div>



<?php



}elseif ($type==5 and $num>=1 ) {
?>




<div class="CurveBox" style="width: 96%; max-width: 600px; margin-top: 20px; padding: 10px 10px 3px 10px; background-color: #f1f1f1;">
        <div align="right">هل تمت المعالجة بالشكل المطلوب ؟</div>
        <div class="CurveBox" align="center" style="width: 100%; height: 15px; background-color: #ffffff; border: solid 1px #919191; overflow: hidden;">


            <div style="width: <?php
$sql->selectsum("avg1","answer","quiz_id=$id $far  and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum1=$row_sum['SUM(avg1)'];
}

$sql->selectsum("avg1","answer","quiz_id=$id $far and value=1 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total1=($sum2/$sum1)*100;
echo round($total1,1);
            ?>%; height: 100%; background-color: #088908; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($total1,1);?>%</b></font></div>
            </div>


            

            <div style="width: <?php



$sql->selectsum("avg1","answer","quiz_id=$id $far and value=3 and $where");
while ($row_sum=$sql->res_sum->fetch_assoc()) {
$sum2=$row_sum['SUM(avg1)'];
}



$total3=($sum2/$sum1)*100;
echo round($total3,1);
            ?>%; height: 100%; background-color: #ff0000; position: relative; float: right;">
                <div style="margin-top: -2px;"><font style="font-size: 12px; color: #ffffff;"><b><?=round($total3,1);?>%</b></font></div>
            </div>
        </div>
        <table style="width: 100%; margin-top: 10px;">
            <tbody><tr align="center">
               <td style="width: <?=round($total1,1);?>%; opacity: 1;">
                    <img src="images/logicChoice1.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=1 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
              
                <td style="width: <?=round($total3,1);?>%; opacity: 1;">
                    <img src="images/logicChoice3.png" style="width: 30px; max-width: 100%;">
                    <div style="font-size: 12px; color: #aaaaaa;">
                       <?php
                    $sql->select2("answer","where quiz_id=$id $far and value=3 and $where");
                    echo $sql->res2->num_rows;
                    ?>                  </div>
                </td>
            </tr>
        </tbody></table>
        <div align="left" style="font-size: 12px; color: #aaaaaa;">عدد الإجابات: <?php
                    $sql->select2("answer","where quiz_id=$id $far  and $where");
                    echo $sql->res2->num_rows;
                    ?></div>
    </div>



<?php



}
}



?>
         </div>


         <?php
}else{
    echo '<div style="margin-left: 15px; font-size: 12px; color: #aaaaaa;">لا يوجد تقييمات!</div>    </div>';
}
?>

         <!-- ///////////////////////  -->
      </div>

   </div>
</div>

</div>