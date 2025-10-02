

         <div class="CurveBox20 Shadow1"
            style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">

            <div style="margin-right: 20px; margin-left: 20px;">
               <font>عرض التقييم</font><br><br>
               <font>للحصول على أفضل مظهر على الايباد</font><br><br>
               <font style="font-size: 16px; color: #ff0000;"><b>اتبع
                     الخطوات كاملة</b></font>
            </div>

            <div class="CurveBox"
               style="width: 96%; max-width: 600px; background-color: #f1f1f1; margin-top: 30px; padding: 20px 20px 30px 20px;">
               <div
                  style="height: 45px; width: 45px; border-radius: 50%; margin-bottom: 20px; background-color: #75c34c; display: inline-block;">
                  <p
                     style="color: #ffffff; font-size: 28px; margin-top: 7px;">
                     <b>1</b></p>
               </div>

               <div>
                  <font>امسح هنا</font>
               </div>
               <br>
               <br>
<div style="display: none;"  id="qrResult">
  <!-- insert your custom barcode setting your data in the GET parameter "data" -->
 

 
</div>
<img id="img1"  src="">
<script type="text/javascript">
  $(document).ready(function() {
    var src= $("#img").attr("src");
    $("#img1").attr("src",src)
  });
</script>

<div style='padding-top:8px; text-align:center; font-size:15px; font-family: Source Sans Pro, Arial, sans-serif;'>
 
  </a>
</div>
             





<!-- Ajax JavaScript File Upload Logic -->



               <div style="margin-top: 40px;">
                  <font>أو انسخ الرابط التالي وألصقه في متصفح سفاري
                     على الايباد</font>
               </div>




               <input id="url" dir="ltr" class="form-control"
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
console.log(qrcode)
    
      generate()
 
  </script>
               <!--<div dir="ltr" align="left" class="CurveBox5" id="url" style="width: 95%; background: #ffffff; padding: 8px 12px 5px 12px;" onclick="copyURL(); return false;">https://qaymni.com/evalForm.php?eoc=f0a8bf986551bebc5a3114973bd7448c</div>-->
               <button class="btn btn-secondary"
                  style="margin-top: 10px;"
                  onclick="copyURL(); return false;">نسخ</button>
            </div>

            <div class="CurveBox"
               style="width: 96%; max-width: 600px; background-color: #f1f1f1; margin-top: 30px; padding: 20px 20px 30px 20px;">
               <div
                  style="height: 45px; width: 45px; border-radius: 50%; margin-bottom: 20px; background-color: #75c34c; display: inline-block;">
                  <p
                     style="color: #ffffff; font-size: 28px; margin-top: 7px;">
                     <b>2</b></p>
               </div>

               <div>
                  <font>بعد فتح الصفحة في سفاري</font><br>
                  <font>اضغط على الأيقونة</font>
               </div>
               <img class="CurveBox20"
                  src="images/iPad_installation_1.png"
                  style="width: 90%; max-width: 400px; margin-top: 15px; border: solid 5px #aaaaaa;">
            </div>

            <div class="CurveBox"
               style="width: 96%; max-width: 600px; background-color: #f1f1f1; margin-top: 30px; padding: 20px 20px 30px 20px;">
               <div
                  style="height: 45px; width: 45px; border-radius: 50%; margin-bottom: 20px; background-color: #75c34c; display: inline-block;">
                  <p
                     style="color: #ffffff; font-size: 28px; margin-top: 7px;">
                     <b>3</b></p>
               </div>

               <div>
                  <font>بناء على لغة الجهاز اختر الخيار التالي</font>
               </div>

               <table
                  style="width: 100%; border-collapse: separate; border-spacing: 15px;">
                  <tbody>
                     <tr align="center">
                        <td align="left">
                           <img class="CurveBox20"
                              src="images/iPad_installation_2a.png"
                              style="width: 100%; max-width: 350px; border: solid 5px #aaaaaa;">
                        </td>
                        <td align="right">
                           <img class="CurveBox20"
                              src="images/iPad_installation_2e.png"
                              style="width: 100%; max-width: 350px; border: solid 5px #aaaaaa;">
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>

            <div class="CurveBox"
               style="width: 96%; max-width: 600px; background-color: #f1f1f1; margin-top: 30px; padding: 20px 20px 30px 20px;">
               <div
                  style="height: 45px; width: 45px; border-radius: 50%; margin-bottom: 20px; background-color: #75c34c; display: inline-block;">
                  <p
                     style="color: #ffffff; font-size: 28px; margin-top: 7px;">
                     <b>4</b></p>
               </div>

               <div>
                  <font>اضغط على إضافة أو Add</font>
               </div>

               <table
                  style="width: 100%; border-collapse: separate; border-spacing: 15px;">
                  <tbody>
                     <tr align="center">
                        <td align="left">
                           <img class="CurveBox20"
                              src="images/iPad_installation_3a.png"
                              style="width: 100%; max-width: 350px; border: solid 5px #aaaaaa;">
                        </td>
                        <td align="right">
                           <img class="CurveBox20"
                              src="images/iPad_installation_3e.png"
                              style="width: 100%; max-width: 350px; border: solid 5px #aaaaaa;">
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>

            <div class="CurveBox"
               style="width: 96%; max-width: 600px; background-color: #f1f1f1; margin-top: 30px; margin-bottom: 10px; padding: 20px 20px 30px 20px;">
               <div
                  style="height: 45px; width: 45px; border-radius: 50%; margin-bottom: 20px; background-color: #75c34c; display: inline-block;">
                  <p
                     style="color: #ffffff; font-size: 28px; margin-top: 7px;">
                     <b>5</b></p>
               </div>

               <div>
                  <font style="font-size: 20px;">مبروك</font><br>
                  <font>لقد حصلت على تطبيق قيمني الخاص بك</font>
               </div>
               <img class="CurveBox20"
                  src="images/iPad_installation_4.png"
                  style="width: 90%; max-width: 400px; margin-top: 15px; border: solid 5px #aaaaaa;">
            </div>

         </div>

      </div>
