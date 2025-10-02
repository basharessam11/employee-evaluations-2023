<?php
$sql->selectall("user limit 1");
while ($row=$sql->res->fetch_assoc()) {
   # code...


?>

<div align="center" style="width: 100%; min-height: 100%;">
   <!-- /container -->

   <div align="center"
      style="width: 90%; max-width: 900px; min-height: 100%; position: relative;">

      <div style="width: 160px; padding-top: 10px; left: 20px;">
         <a href="#"><img src="images/<?=$row['logo']?>"
               style="width: 140px;"></a>
      </div>
      <div align="center" style="min-height: 100%;">

      </div>
   </div>

   <div style="width: 90%; max-width: 900px; min-height: 100%;">
      <script>
         //<!-- sortable -->
         $(document).ready(function() {
            screenResize();
         });
      </script>

      <div id="blackScreen"
         style="background-color: #000000; opacity: 0.3; width: 100%; height: 100%; top: 0px; bottom: 0px; right: 0px; left: 0px; display: none; position: fixed; z-index: 2;"
         onclick="hideSideLinks(); return false;"></div>

      <div align="left" id="sideLinksDiv"
         class="CurveBottomLeft50 Shadow2"
         style="background-color: rgb(221, 221, 221); width: 250px; top: 0px; right: 0px; position: fixed; z-index: 300;">

         <!--<div align="center" class="CurveBottomLeft10" style="width: 80px; height: 30px; padding-top: 5px; color: #ffffff; position: absolute; top: 0px; left: -80px; background: #b7b7b7; cursor: pointer;" onclick="window.location = 'index.php?s=subscription'">المجانية</div>-->

         <div
            style="height: 60px; background-color: #6dba82; border-bottom: solid 1px #ffffff;">
            <div align="right"
               style="width: 200px; height: 100%; padding: 10px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
               <font style="color: #ffffff; font-size: 16px;"><b><?=$row['name_c']?></b></font><br>
               <font style="color: #ffffff;"><?=$row['name']?></font>
            </div>
            <div
               style="width: 50px; height: 100%; position: absolute; top: 0px; left: 0px;">
               <div align="center" id="showButton"
                  style="padding-top: 16px; cursor: pointer; display: none;"
                  onclick="showSideLinks(); return false;"
                  onmouseover="this.style.filter = 'invert(0.7)';"
                  onmouseout="this.style.filter = 'invert(0)';">
                  <img src="images/sideLinksButton.png"
                     style="width: 20px; filter: invert(1);">
               </div>
               <div align="center" id="hideButton"
                  style="padding-top: 16px; display: none; cursor: pointer;"
                  onclick="hideSideLinks(); return false;"
                  onmouseover="this.style.filter = 'invert(0.7)';"
                  onmouseout="this.style.filter = 'invert(0)';">
                  <img src="images/xButtonBlack.png"
                     style="width: 25px; filter: invert(1);">
               </div>
            </div>
         </div>

         <div id="list">
            <div
               style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: <?php  
if (isset($_GET['rate']) and $_GET['rate']=='list') {
    echo'#6dba82';
}else{
    echo '#dddddd';
}

               ?>;"
               
               onclick="window.location = 'index.php?rate=list&day=list';">
               <div align="right"
                  style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                  <font>تقييمات العملاء</font>
               </div>
               <div align="center"
                  style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 0px;">
                  <!--<img src="images/viewQuestions_icon.png" style="width: 16px;" />-->
                  <i class="material-icons-outlined"
                     style="font-size: 24px;">article</i>
               </div>
            </div>

            <div
               style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color:<?php  
if (isset($_GET['add_q']) and $_GET['add_q']=='list') {
    echo'#6dba82';
}else{
    echo '#dddddd';
}

               ?> ;"
               
               onclick="window.location = 'index.php?add_q=list';">
               <div align="right"
                  style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                  <font>أسئلة التقييم</font>
               </div>
               <div align="center"
                  style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 1px;">
                  <!--<img src="images/editQuestions_icon.png" style="width: 20px;" />-->
                  <i class="material-icons-round"
                     style="font-size: 24px;">edit</i>
               </div>
            </div>
<div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: <?php  
if (isset($_GET['barcode']) and $_GET['barcode']=='list') {
    echo'#6dba82';
}else{
    echo '#dddddd';
}

               ?> ;;"  onclick="window.location = 'index.php?barcode=list';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>تطبيق الآيباد</font>
                <!--<font>عرض التقييم</font>-->
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 0px;">
                <!--<img src="images/url_icon.png" style="width: 20px;" />-->
                <!--<i class="material-icons-round" style="font-size: 26px;">link</i>-->
                <i class="material-icons-round" style="font-size: 24px;">app_shortcut</i>
            </div>
        </div>




            <div
               style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: <?php  
if (isset($_GET['city']) and $_GET['city']=='list') {
    echo'#6dba82';
}else{
    echo '#dddddd';
}

               ?>;"
               "
               onclick="window.location = 'index.php?city=list';">
               <div align="right"
                  style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                  <font>الفروع</font>
               </div>
               <div align="center"
                  style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                  <i class="material-icons-round"
                     style="font-size: 25px;">home</i>
               </div>
            </div>






            <div
               style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: <?php  
if (isset($_GET['phone']) and $_GET['phone']=='list') {
    echo'#6dba82';
}else{
    echo '#dddddd';
}

               ?>;"
               "
               onclick="window.location = 'index.php?phone=list';">
               <div align="right"
                  style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                  <font>جوالات العملاء</font>
               </div>
               <div align="center"
                  style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                  <i class="material-icons-round"
                     style="font-size: 25px;">phone</i>
               </div>
            </div>

            <div
               style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: <?php  
if (isset($_GET['email']) and $_GET['email']=='list') {
    echo'#6dba82';
}else{
    echo '#dddddd';
}

               ?>;"
               "
               onclick="window.location = 'index.php?email=list';">
               <div align="right"
                  style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                  <font>ايميلات العملاء</font>
               </div>
               <div align="center"
                  style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                  <i class="material-icons-round"
                     style="font-size: 25px;">alternate_email</i>
               </div>
            </div>

            <div
               style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: <?php  
if (isset($_GET['profile']) and $_GET['profile']=='list') {
    echo'#6dba82';
}else{
    echo '#dddddd';
}

               ?>;"
               "
               onclick="window.location = 'index.php?profile=list';">
               <div align="right"
                  style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                  <font>الملف الشخصي</font>
               </div>
               <div align="center"
                  style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 0px;">
                  <!--<img src="images/profile_icon.png" style="width: 19px;" />-->
                  <i class="material-icons-round"
                     style="font-size: 26px;">person</i>
                  <!--<i class="material-icons-outlined" style="font-size: 26px;">face</i>-->
               </div>
            </div>

            <div
               style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff;"
               "
               onclick="window.location = 'logout.php';">
               <div align="right"
                  style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                  <font>تسجيل خروج</font>
               </div>
               <div align="center"
                  style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 0px;">
                  <!--<img src="images/logout_icon.png" style="width: 16px;" />-->
                  <i class="material-icons-round"
                     style="font-size: 26px;">power_settings_new</i>
               </div>
            </div>
         </div>

         <div align="center" class="CurveBottomLeft50" id="slideUp"
            style="width: 50px; height: 50px; padding-top: 9px; position: relative; cursor: pointer;"
            onclick="slideUp(); return false;"
            onmouseover="this.style.filter = 'invert(0.7)';"
            onmouseout="this.style.filter = 'invert(0)';">
            <img src="images/arrowUp.png"
               style="width: 20px; filter: invert(1);">
         </div>

         <div align="center" class="CurveBottomLeft50" id="slideDown"
            style="width: 50px; height: 50px; padding-top: 9px; position: relative; cursor: pointer; display: none;"
            onclick="slideDown(); return false;"
            onmouseover="this.style.filter = 'invert(0.7)';"
            onmouseout="this.style.filter = 'invert(0)';">
            <img src="images/arrowDown.png"
               style="width: 20px; filter: invert(1);">
         </div>

      </div>

      <?php

      }
      ?>