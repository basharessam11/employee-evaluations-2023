<?php

include "admin/inc/sql.php";

?>
<html lang="ar">

<head>
   <title><?php
clearstatcache();

$sql->selectall("user limit 1");
while ($row=$sql->res->fetch_assoc()) {
   echo $row['name'].$row['name_c'];
   $logo=$row['logo'];
}
?></title>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
   <!-- for iOS -> Safari -->
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style"
      content="black-translucent">
   <link rel="apple-touch-icon" href="admin/images/<?=$logo?>">
   <!-- for Android -> Chrome, Firefox and Opera -->
   <meta name="theme-color" content="#ffffff">
   <link rel="icon" sizes="192x192" href="admin/images/<?=$logo?>">
   <!-- jQuery -->
   <script src="admin/jQuery/jquery-3.2.1.min.js"></script>
   <!-- Bootstrap -->
   <link type="text/css"
      href="admin/bootstrap/bootstrap-4.6.0/css/bootstrap.min.css"
      rel="stylesheet">
   <script type="text/javascript"
      src="admin/bootstrap/bootstrap-4.6.0/js/bootstrap.bundle.min.js">
   </script>
   <!-- My CSS -->
   <link rel="stylesheet" type="text/css" href="admin/style.css">
   <!-- My javascript -->
   <script type="text/javascript" src="admin/javaScript/javaScript.js?v=2">
   </script>

   <script type="text/javascript">
      if (("standalone" in window.navigator) && window.navigator
         .standalone) {
         var noddy, remotes = false;
         document.addEventListener('click', function(event) {
            noddy = event.target;
            while (noddy.nodeName !== "A" && noddy.nodeName !==
               "HTML") {
               noddy = noddy.parentNode;
            }
            if ('href' in noddy && noddy.href.indexOf(
               'http') !== -1 && (noddy.href.indexOf(document
                  .location.host) !== -1 || remotes)) {
               event.preventDefault();
               document.location.href = noddy.href;
            }
         }, false);
      }
   </script>
     <script type="text/javascript" src="admin/js/qrcode.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {
         //Disable full page
         $("html").on("contextmenu", function(e) {
            return false;
         });
      });
   </script>

<?php
if (isset($_COOKIE['yes']) and $_COOKIE['yes']==1) {
echo '<script type="text/javascript">
$(document).ready(function() {
     $("#evalForm").remove();
                    $("#evalDone").show("slow");
                  })
   </script>';
}
?>
   
</head>

<body style="margin-top: 10px;">

   <div align="center"><!-- /container -->

      <div
         style="width: 100%; max-width: 600px; margin-bottom: 30px; position: relative;">
         <div align="center" >
          <?php

$sql->selectall("user limit 1");
while ($row=$sql->res->fetch_assoc()) {
 $logo=$row['logo'];
$barcode=$row['barcode'];

}

       ?><a
               href="#"><br><img style="  align-items: center; width: 20%; height: auto"
                  src="admin/images/<?=$logo?>" style="width: 150px;"></a>
         </div><br>




         <div style="clear: both;"></div>

         <div class="CurveBox20 Shadow1" id="evalForm"
            style="margin-top: 10px; background-color: #f7f7f7; padding: 15px 25px 5px 25px;">
            <form id="answers_form" role="form" style="display: ;">



<?php


$sql->selectall("num");

while ($row1=$sql->res->fetch_assoc()) {
$num=$row1['num'];

}

$ex=explode("@", $num);

for ($i=1; $i <=count($ex)-1 ; $i++) { 
$id= $ex[$i] ?? 0;
     $sql->select1("quiz"," where id =$id");
      while ($row=$sql->res1->fetch_assoc()) {
   $id=$row['id'];
   $name=$row['name'];
   
   $type=$row['type'];
   $phone=$row['phone'];
   $email=$row['email'];

   $optional=$row['optional'];

 if ($optional==0) {
    $re='required';
}else{
    $re='';
    
}


?>
               <div class="CurveBox"
                  style="width: 100%; margin-top: 20px; padding: 5px 10px 10px 10px; background-color: #f1f1f1;">
                  <div align="right">
                     <font><?=$name?> <?php

                                ?></font>
                                <?php
 if ($optional==1 and $type==6 or $optional==1 and $type==7 or $optional==1 and $type==8 ) {
    echo '<font style="font-size: 12px; color: #aaaaaa;">(اختياري)</font>';
}else{
    echo'<font style="color: #ff0000;"><b>*</b></font>';
}
                                ?>
                  </div>
                 <?php
if ($type==1) {
    echo '       
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="admin/images/face1.png" onclick="selectAnswer(this, '.$id.', 100); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="admin/images/face2.png" onclick="selectAnswer(this, '.$id.', 75); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
    <img class="ques_'.$id.'" src="admin/images/face3.png" onclick="selectAnswer(this, '.$id.', 50); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
    <img class="ques_'.$id.'" src="admin/images/face4.png" onclick="selectAnswer(this, '.$id.', 25); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
    <img class="ques_'.$id.'" src="admin/images/face5.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
</div>                
<input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'" value=""
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">

               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>  ';
}elseif ($type==2) {
    echo ' 
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="admin/images/face1.png" onclick="selectAnswer(this, '.$id.', 100); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="admin/images/face3.png" onclick="selectAnswer(this, '.$id.', 50); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
    <img class="ques_'.$id.'" src="admin/images/face5.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
</div>              
<input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'" value=""
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">

               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>    ';
}elseif ($type==3) {
    echo '
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="admin/images/ques1.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="admin/images/ques2.png" onclick="selectAnswer(this, '.$id.', 2); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
    <img class="ques_'.$id.'" src="admin/images/ques3.png" onclick="selectAnswer(this, '.$id.', 3); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
</div>              <input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">

               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">

               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">

               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">

               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'" value=""
                  type="hidden">

               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">

               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
 <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">
               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>    ';
}elseif ($type==4) {
    echo '
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="admin/images/ques1.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="admin/images/ques3.png" onclick="selectAnswer(this, '.$id.', 3); return false;" style="width: 13%; max-width: 50px; margin-right: 50px;">
</div>               <input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'" value=""
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">

               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>   ';
}elseif ($type==5) {
    echo '
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="admin/images/logicChoice1.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="admin/images/logicChoice3.png" onclick="selectAnswer(this, '.$id.', 3); return false;" style="width: 13%; max-width: 50px; margin-right: 50px;">
</div>             <input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'"
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">

               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>     ';
}elseif ($type==6) {

    echo ' 
<div align="right">
    <input class="form-control justNumbers" '.$re.' id="mobile'.$id.'" type="tel" style="width: 200px; margin-top: 5px;" maxlength="10" onfocusout="onNumberInputChange(this,'.$id.',1); return false;" data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="أرقام إنجليزية فقط">
</div>                <input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'"
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">

               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>  ';
}elseif ($type==7) {

   
    echo ' 
<div align="right">
    <input class="form-control" '.$re.' type="text" style="width: 200px; margin-top: 5px;" maxlength="50" onfocusout="onCharInputChange(this,'.$id.',0); return false;">
</div>             
   <input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'"
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">

               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>  ';
}elseif ($type==8) {

   
    echo '
<textarea class="form-control" '.$re.' style="width: 100%; height: 70px; margin-top: 5px; padding: 5px; resize: none;" maxlength="500" placeholder="اكتب هنا..." onchange="document.getElementById(`ansText_'.$id.'`).value = this.value;"></textarea>  
            
<input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'"
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  
                  type="hidden">

               <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>    ';
}elseif ($type==9) {

   
    echo '<div>

    <select class="form-control" '.$re.' onchange="select(this.value)" >
            <option value"0">اختر الفرع</option>';

    

 $sql->select3("far","");

 while ($row5=$sql->res3->fetch_assoc()) {
    echo '<option value="'.$row5["id"].'">'.$row5["name"].'</option>';
 }
  





echo' </select> <input id="ansType_'.$id.'" name="ansType_'.$id.'"
                  type="hidden" value="'.$type.'">
               <input id="ansOptional_'.$id.'" name="ansOptional_'.$id.'"
                  type="hidden" value="'.$optional.'">
               <input id="ansIsMobile_'.$id.'" name="ansIsMobile_'.$id.'"
                  type="hidden" value="'.$phone.'">
               <input id="ansIsEmail_'.$id.'" name="ansIsEmail_'.$id.'"
                  type="hidden" value="'.$email.'">
               <input id="ansValue_'.$id.'" name="ansValue_'.$id.'"
                  type="hidden">
               <input id="ansNumber_'.$id.'" name="ansNumber_'.$id.'"
                  type="hidden">
               <input id="ansChar_'.$id.'" name="ansChar_'.$id.'"
                  type="hidden">
                  <input id="ansSelect_'.$id.'" class="select" name="ansSelect_'.$id.'"  value="0"
                  type="hidden">


                                  <textarea id="ansText_'.$id.'" name="ansText_'.$id.'"
                  style="display: none;"></textarea>    </div> ';
}


                    ?>
               </div>
<?php
}



}
?>

<script type="text/javascript">
  
  function select(a) {
    $(".select").val(a)
  }
</script>
               
           
               <div align="center"
                  style="margin-top: 20px; padding-bottom: 15px;">
                  <button class="GreenButton" id="addAnswerButton"
                     type="button" style="width: 120px;"
                     onclick="addAnswer(); return false;">
                     <div style="margin-top: 3px;">ارسال</div>
                  </button>
               </div>
               
               <input id="activeQuesOrder" name="activeQuesOrder"
                  type="hidden" value="<?=$num?>">
               <input type="hidden" name="sendFromCustomerMobile"
                  value="0">

            </form>

            <div
               style="display: none; padding: 100px 10px 70px 10px;">
               <div><img src="admin/images/sadFace.png"
                     style="width: 200px;"></div>
               <div style="margin-top: 30px;">الاشتراك غير مفعل</div>
               <div style="margin-top: 30px;">يمكنك تفعيل الاشتراك
                  بالدخول على صفحة الاشتراكات في حسابك</div>
               <div><a href="https://qaymni.com"
                     target="_blank">qaymni.com</a></div>
            </div>

         </div>
 <div id="evalDone" style="width: 100%; height: 500px; padding-top: 150px; display: none;">
            <img src="admin/images/done.png" style="width: 200px;">
            <div><font style="font-size: 26px;">شكرا لك</font></div>
            <div><font style="font-size: 16px;">تم إرسال تقييمك</font></div>
            <div style="margin-top: 40px;">
         </div>
        </div>
         <div >






            <br>
            <br>
                     <div align="center"
            style="margin-top: -10px;   display: ;">
            <img id="img1" style="width:18% ; height: auto"
       src="admin/images/<?=$barcode?>">



       <br>
            <font style="color: #696969;">قيمني من جوالك</font>
         </div>

<div style="display: none;"  id="qrResult">
  <!-- insert your custom barcode setting your data in the GET parameter "data" -->
 

 
</div>
 <input id="url" style="display: none;" dir="ltr" class="form-control"
                  value="<?=$_SERVER['SERVER_NAME']?>"
                  style="background: #ffffff;" readonly=""
                  onclick="copyURL(); return false;">



                          <script type="text/javascript">
    var qrcode= new QRCode(document.getElementById('qrResult'),{
    width:200,
    height:200
    });

    function generate(){
      var message = document.getElementById('url');
      qrcode.makeCode(message.value);
    }

    
      generate()
 
  </script>
<script type="text/javascript">
  $(document).ready(function() {
    var src= $("#img").attr("src");
    $("#img1").attr("src",src)
  });
</script>
       <br>
       <br>
             <div>
                  © <script>
      document.write(new Date().getFullYear())
      </script>
       <a href="https://www.facebook.com/basharessam11" target="_blank" class="footer-link fw-bolder">❤️ made with  by  bashar essam </a>
        </div>
         </div>

      </div>

   </div>

   <div style="visibility: hidden;">
      <!-- لن يتم عرض شيء هنا ولكن ليتم تحميل الصور فور الإنتهاء من تحميل الصفحة فتصبح جاهزه إذا تم الضغط عليها -->
      <img src="admin/images/face1select.png" style="height: 10px;">
      <img src="admin/images/face2select.png" style="height: 10px;">
      <img src="admin/images/face3select.png" style="height: 10px;">
      <img src="admin/images/face4select.png" style="height: 10px;">
      <img src="admin/images/face5select.png" style="height: 10px;">
      <img src="admin/images/ques1select.png" style="height: 10px;">
      <img src="admin/images/ques2select.png" style="height: 10px;">
      <img src="admin/images/ques3select.png" style="height: 10px;">
      <img src="admin/images/<?=$logo?>" style="height: 10px;">
   </div>

   <!-- error message modal -->
   <div class="modal fade bd-example-modal-lg" tabindex="-1"
      role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">


      <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content">
            <div align="center"
               style="padding: 25px; border: solid 2px #db3e3e;">
               <div
                  style="border-radius: 50%; width: 45px; height: 45px; background-color: #db3e3e; font-size: 36px; color: #ffffff;">
                  <b>!</b></div>
               <div id="errorMessage" style="margin-top: 10px;"></div>
               <button type="button" class="btn btn-danger"
                  style="width: 80px; height: 35px; margin-top: 10px;"
                  data-dismiss="modal" aria-label="Close">
                  <div style="margin-top: 3px;">OK</div>
               </button>
            </div>
         </div>
      </div>
   </div>

</body>

</html>