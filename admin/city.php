


<?php

$sql->select1("far"," ");
if ($sql->res1->num_rows<1) {
  ?>
  
<div class="CurveBox20 Shadow1" style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">


<font>الملف الشخصي</font>

<div>
    
    <div id="supportDiv" style="width: 96%; max-width: 600px; margin-bottom: 10px; padding: 0px 20px 0px 20px;">
        
        <font>ايميلات العملاء</font>
        <br><br>
        <font>عدد ايميلات عملائك المسجلة: </font><br>
        <font style="font-size: 30px; color: #088908;"><b>0</b></font>
        <br>
        

        <div style="margin-top: 50px; margin-bottom: 50px;">
            <img src="images/sadFace.png" style="width: 150px;"><br><br><br>
            <font>لا يوجد لديك ايميلات مسجلة!</font><br>
            <font>إذا رغبت بجمع ايميلات عملائك، أضف سؤال عن ايميل العميل في التقييم.</font>
        </div>

            
    </div>
    
</div>
    
</div>


<?php
}else{
  ?>

<div class="CurveBox20 Shadow1" style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">
 
<font>الفروع</font>
 
<div class="CurveBox" style="width: 96%; max-width: 600px;  margin-top: 20px; margin-bottom: 20px; padding: 0px 20px 20px 20px;">
    
 <div style="margin: 0px 10px 10px 10px;">
            <div style="margin-top: 30px;">
                <div style="float: right;">اضافة فرع:</div>
                
                <div style="clear: both;"></div>
                <input class="form-control" id="name" type="text"  value="" maxlength="50" placeholder="اسم الفرع"  >
                <div align="left" id="changePersonalNameButton"  >
                    <button class="btn btn-danger" type="button" style="margin-top: 10px;" onclick="addfar(); return false;"><div style="margin-top: 3px;">حفظ</div></button>
                </div>
            </div>

        </div>
  <hr>
<?php
if (isset($_GET['add']) and $_GET['add']=="su") {
   echo '   <script type="text/javascript">
        
alert("تم الاضافة بنجاح");

    </script>';
}else if (isset($_GET['edit'])and $_GET['edit']=="su"  ) {
   echo '   <script type="text/javascript">
        
alert("تم التعديل بنجاح");

    </script>';
}else if (isset($_GET['delete'])and $_GET['delete']=="su"  ) {
   echo '   <script type="text/javascript">
        
alert("تم الحذف بنجاح");

    </script>';
}




?>
<script type="text/javascript">
    function addfar() {
        var name=$("#name").val();

        $.post('add_far.php',
         {
           name: name
         },
          function(data) {

            if (data==1) {
                window.location="?city=list&add=su";
            }else if (data==2) {
                alert("هذا الفرع موجود بالفعل")
            }else if (data==3) {
                alert("هذا الحقل فارغ الرجاء ملئ الحقل واعادة المحاولة")
            }else {
               alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
            }
           
        });
    }


    function editfar(id) {
        var name=$("#name"+id).val();

        $.post('edit_far.php',
         {
           name: name,
           id: id,
         },
          function(data) {

            if (data==1) {
                window.location="?city=list&edit=su";
            }else if (data==2) {
                alert("هذا الفرع موجود بالفعل")
            }else if (data==3) {
                alert("هذا الحقل فارغ الرجاء ملئ الحقل واعادة المحاولة")
            }else {
               alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
            }
           
        });
    }

     function deletefar(id) {
        var name=$("#name"+id).val();

        $.post('deletefar.php',
         {
          
           id: id,
         },
          function(data) {

            if (data==1) {
                window.location="?city=list&delete=su";
            }else {
               alert('عذرا حدث خطأ! الرجاء التأكد من الاتصال بالانترنت!');
            }
            
           
        });
    }
</script>


<?php

$sql->select1("far"," ");

      while ($row=$sql->res1->fetch_assoc()) {
   $id=$row["id"];
   $name=$row["name"];
   

?>

        <div style="margin: 0px 10px 10px 10px;">
            <div style="margin-top: 30px;">
                <div style="float: right;">اسم الفرع:</div>
                <div style="float: left; cursor: pointer;" onclick="$('#changePersonalNameButton<?=$id?>').toggle('slow'); document.getElementById('name<?=$id?>').disabled = '';"><img src="images/edit_icon.png" style="width: 20px;"></div>
                <div style="margin-left: 10px; cursor: pointer; float: left;" onclick="if(confirm('هل أنت متأكد من حذف هذا الفرع؟')) {deletefar(<?=$id?>);}">
                                            <img src="images/delete_icon.png" style="width: 20px;">
                                        </div>
                <div style="clear: both;"></div>
                <input class="form-control" id="name<?=$id?>" type="text" value="<?=$name?>" maxlength="50" placeholder="الاسم" disabled="">
                <div align="left" id="changePersonalNameButton<?=$id?>" style="display: none;">
                    <button class="btn btn-danger" type="button" style="margin-top: 10px;" onclick="editfar(<?=$id?>); return false;"><div style="margin-top: 3px;">حفظ</div></button>
                </div>
            </div>

        </div>
<?php

}
?>

<!-- Ajax JavaScript File Upload Logic -->

    </div>


    </div>
<?php
}


?>


   




    </div>

  