


<?php

$sql->select1("answer","where phone=1");
if ($sql->res1->num_rows<1) {
  ?>
  <div class="CurveBox20 Shadow1" style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">




<div>
    
    <div id="supportDiv" style="width: 96%; max-width: 600px; margin-bottom: 10px; padding: 0px 20px 0px 20px;">
        
        <font>جوالات العملاء</font>
        <br><br>
        <font>عدد جوالات عملائك المسجلة: </font><br>
        <font style="font-size: 30px; color: #088908;"><b>0</b></font>
        <br>
        

        <div style="margin-top: 50px; margin-bottom: 50px;">
            <img src="images/sadFace.png" style="width: 150px;"><br><br><br>
            <font>لا يوجد لديك جوالات مسجلة!</font><br>
            <font>إذا رغبت بجمع جوالات عملائك، أضف سؤال عن جوال العميل في التقييم.</font>
        </div>

            
    </div>
    
</div>
    
</div>
<?php
}else{
  ?>

<div class="CurveBox20 Shadow1" style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">




<div>
    
    <div id="mobilesDiv" style="width: 96%; max-width: 600px; margin-bottom: 10px; padding: 0px 20px 0px 20px;">
        
        <font>جوالات العملاء</font>
        <br><br>
        <font>عدد أرقام جوالات عملائك المسجلة:</font><br>
        <font style="font-size: 30px; color: #088908;"><b><?php

echo $sql->res1->num_rows;


        ?></b></font>
        <br>


<textarea dir="ltr" class="form-control" style="width: 100%; height: 120px; color: #088908; resize: none;"><?php


      while ($row=$sql->res1->fetch_assoc()) {
   echo $row["number"].", ";
   
   }

?> </textarea>

        <br>
        <font style="font-size: 12px;">هذه الصيغة جاهزة للنسخ واللصق كما هي إذا أردت إرسال رسائل SMS لعملائك باستخدام أحد مزودي خدمات رسائل SMS</font>
        

            
    </div>
    
</div>
    
</div>


    </div>
<?php
}


?>


   


