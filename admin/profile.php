<?php
$sql->selectall("user limit 1");
while ($row=$sql->res->fetch_assoc()) {
   # code...


?>

<div class="CurveBox20 Shadow1" style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">


<div>
    <font>الملف الشخصي</font>
    
    <div class="CurveBox" style="width: 96%; max-width: 600px;  margin-top: 20px; margin-bottom: 20px; padding: 0px 20px 20px 20px;">
        <div style="height: 25px; position: relative;">
            <div style="right: 0px; top: 13px; position: absolute;"># البيانات الشخصية</div>
        </div>
        <hr>
        <div style="margin: 0px 10px 10px 10px;">
            <div style="margin-top: 30px;">
                <div style="float: right;">الاسم:</div>
                <div style="float: left; cursor: pointer;" onclick="$('#changePersonalNameButton').show('slow'); document.getElementById('name').disabled = '';"><img src="images/edit_icon.png" style="width: 20px;"></div>
                <div style="clear: both;"></div>
                <input class="form-control" id="name" type="text" value="<?=$row['name']?>" maxlength="50" placeholder="الاسم" disabled="">
                <div align="left" id="changePersonalNameButton" style="display: none;">
                    <button class="btn btn-danger" type="button" style="margin-top: 10px;" onclick="changePersonalName(); return false;"><div style="margin-top: 3px;">حفظ</div></button>
                </div>
            </div>
            <div style="margin-top: 25px;">
                <div style="float: right;">الجوال:</div>
                <div style="float: left; cursor: pointer;" onclick="$('#changeMobileButton').show('slow'); document.getElementById('mobile').disabled = '';"><img src="images/edit_icon.png" style="width: 20px;"></div>
                <div style="clear: both;"></div>
                <input class="form-control justNumbers" id="mobile" type="tel" value="<?=$row['phone']?>" maxlength="10" placeholder="الجوال" disabled="" data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="أرقام إنجليزية فقط">
                <div align="left" id="changeMobileButton" style="display: none;">
                    <button class="btn btn-danger" type="button" style="margin-top: 10px;" onclick="changeMobile(); return false;"><div style="margin-top: 3px;">حفظ</div></button>
                </div>
            </div>
            <div style="margin-top: 25px;">
                <div style="float: right;">الايميل:</div>
                <div style="float: left; cursor: pointer;" onclick="$('#changeEmailButton').show('slow'); document.getElementById('email').disabled = '';"><img src="images/edit_icon.png" style="width: 20px;"></div>
                <div style="clear: both;"></div>
                <input class="form-control justEmails" id="email" type="text" value="<?=$row['email']?>" maxlength="50" placeholder="الايميل" disabled="" data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="يرجى إدخال بريد إلكتروني صحيح">
                <div align="left" id="changeEmailButton" style="display: none;">
                    <button class="btn btn-danger" type="button" style="margin-top: 10px;" onclick="changeEmail(); return false;"><div style="margin-top: 3px;">حفظ</div></button>
                </div>
            </div>



   <div style="margin-top: 25px;">
                <div style="float: right;">لوجو:</div>
                <div style="float: left; cursor: pointer;" onclick="$('#changePhotoButton1').show('slow'); document.getElementById('fileupload').disabled = '';"><img src="images/edit_icon.png" style="width: 20px;"></div>
                <div style="clear: both;"></div>



                <input class="form-control justNumbers" id="fileupload" name="fileupload" type="file" value="<?=$row['phone']?>" maxlength="10"   disabled="" data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="أرقام إنجليزية فقط">
              
                <div align="left" id="changePhotoButton1" style="display: none;">
                    <button id="upload-button " class="btn btn-danger" type="button" style="margin-top: 10px;" onclick="uploadFile()"><div style="margin-top: 3px;">حفظ</div></button>
                </div>
            </div>


<!-- Ajax JavaScript File Upload Logic -->
  <script>
  async function uploadFile() {
  let formData = new FormData(); 
  formData.append("file", fileupload.files[0]);
  await fetch('upload.php', {
    method: "POST", 
    body: formData
  }); 
  window.location="?profile=list";
  }
  </script>
        </div>
    </div>
    
    <div class="CurveBox" style="width: 96%; max-width: 600px;  margin-top: 40px; margin-bottom: 20px; padding: 0px 20px 20px 20px;">
        <div style="height: 25px; position: relative;">
            <div style="right: 0px; top: 13px; position: absolute;"># بيانات المحل أو الجهة</div>
        </div>
        <hr>
        <div style="margin: 0px 10px 10px 10px;">
            <div style="margin-top: 30px;">
                <div style="float: right;">اسم المحل أو الجهة:</div>
                <div style="float: left; cursor: pointer;" onclick="$('#changeOrgNameButton').show('slow'); document.getElementById('orgName').disabled = '';"><img src="images/edit_icon.png" style="width: 20px;"></div>
                <div style="clear: both;"></div>
                <input class="form-control" id="orgName" type="text" value="<?=$row['name_c']?>" maxlength="50" placeholder="اسم المحل أو الجهة" disabled="">
                <div align="left" id="changeOrgNameButton" style="display: none;">
                    <button class="btn btn-danger" type="button" style="margin-top: 10px;" onclick="changeOrgName(); return false;"><div style="margin-top: 3px;">حفظ</div></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="CurveBox" style="width: 96%; max-width: 600px; margin-top: 40px; margin-bottom: 10px; padding: 0px 20px 20px 20px;">
        <div style="height: 25px; position: relative;">
            <div style="right: 0px; top: 13px; position: absolute;"># كلمة المرور</div>
            <div style="left: 15px; top: 13px; position: absolute; cursor: pointer;" onclick="$('#passwordChangedDiv').hide('slow'); $('#changePasswordDiv').show('slow');"><img src="images/edit_icon.png" style="width: 20px;"></div>
        </div>
        <hr>
        <div id="changePasswordDiv" style="margin: 0px 10px 10px 10px; display: none;">
            <div style="margin-top: 30px;">
                <div style="float: right;">كلمة المرور القديمة:</div>
                <div style="clear: both;"></div>
                <input class="form-control" id="oldPassword" type="password" placeholder="كلمة المرور القديمة" maxlength="20">
            </div>
            <div style="margin-top: 25px;">
                <div style="float: right;"><font>كلمة المرور الجديدة: </font><font style="font-size: 10px; color: #004400;">(ستة أحرف على الأقل)</font></div>
                <div style="clear: both;"></div>
                <input class="form-control justPasswords" id="password1" type="password" placeholder="كلمة المرور الجديدة" maxlength="20" data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="إدخال خاطئ">
            </div>
            <div style="margin-top: 10px;">
                <input class="form-control" id="password2" type="password" placeholder="كرر كلمة المرور" maxlength="20">
            </div>
            <div align="left">
                <button class="btn btn-danger" type="button" style="margin-top: 20px;" onclick="changePassword(); return false;"><div style="margin-top: 3px;">تغيير كلمة المرور</div></button>
            </div>
        </div>
        <div id="passwordChangedDiv" style="padding-bottom: 50px; display: none;">
            <img src="./profile_files/done.png" style="width: 70px; margin-top: 80px;">
            <div>تم تغيير كلمة المرور بنجاح</div>
        </div>
    </div>
    
</div>
    
</div>


    </div>

<?php
}
?>