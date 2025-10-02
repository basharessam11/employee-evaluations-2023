
        
<div class="CurveBox20 Shadow1" style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">





<script>//<!-- sortable -->
    $( function() {
        $( "#sortable" ).sortable({
            handle: ".handle"
        });
        //$( "#sortable" ).disableSelection();

        $("#sortable").sortable({
            update: function(event, ui) { //هذه الدالة تعمل عندما يحدث تغيير في الترتيب
                reorderQuestions(71);
            }
        });
    });
</script>



<div>
    <div><font>التحكم بأسئلة التقييم</font></div>
    
    
    <div id="sortable" class="ui-sortable">
            
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

   $optional=$row['optional'];

 if ($optional==0) {
    $re='required';
}else{
    $re='';
    
}


?>

            <div id="<?=$id?>">

                <div class="CurveBox" style="width: 96%; max-width: 600px; margin-top: 20px; padding: 5px 15px 10px 10px; background-color: #f1f1f1; position: relative;">
                    
                    <div class="CurveBox handle" style="width: 35px; height: 35px; top: 20px; left: -25px; padding: 5px; background-color: #f1f1f1; cursor: move; position: absolute; display: ;">
                        <img src="images/reorder.png" style="width: 100%; filter: invert(0.7);">
                    </div>
                    
                    
                    <table style="width: 100%;">
                        <tbody><tr>
                            <td align="right">
                                <font><?=$name?> <?php

                                ?></font>
                                <?php
 if ($optional==1 and $type==6 or $optional==1 and $type==7 or $optional==1 and $type==8 ) {
    echo '<font style="font-size: 12px; color: #aaaaaa;">(اختياري)</font>';
}else{
    echo'<font style="color: #ff0000;"><b>*</b></font>';
}
                                ?>
                                                            </td>
                            <td align="left" style="width: 90px; vertical-align: top;">
                                
                                <div dir="ltr" style="position: absolute; top: 5px; left: 12px;">
                                    <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#control_ques_'+<?=$id?>).toggle('fast');">
                                    
                                    <div id="control_ques_<?=$id?>" style="width: 60px; position: absolute; top: 0px; left: 30px; display: none;">
                                        <div style="margin-left: 3px; cursor: pointer; float: left;" data-toggle="modal" data-target="#myModal" onclick="showQuestionEditDialogBox(<?=$id?>,
                                                                7,
                                                                0,
                                                                0,
                                                                0); return false;">
                                            <img src="images/edit_icon.png" style="width: 20px;">
                                        </div>

                                        <div style="margin-left: 10px; cursor: pointer; float: left;" onclick="if(confirm('هل أنت متأكد من حذف هذا السؤال؟')) {deleteQues(<?=$id?>);}">
                                            <img src="images/delete_icon.png" style="width: 20px;">
                                        </div>
                                        
                                        <div style="clear: both;"></div>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                    </tbody></table>
                    
                    <?php
if ($type==1) {
    echo '       <div>
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="images/face1.png" onclick="selectAnswer(this, '.$id.', 100); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="images/face2.png" onclick="selectAnswer(this, '.$id.', 75); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
    <img class="ques_'.$id.'" src="images/face3.png" onclick="selectAnswer(this, '.$id.', 50); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
    <img class="ques_'.$id.'" src="images/face4.png" onclick="selectAnswer(this, '.$id.', 25); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
    <img class="ques_'.$id.'" src="images/face5.png" onclick="selectAnswer(this, '.$id.', 0); return false;" style="width: 13%; max-width: 50px; margin-right: 10px;">
</div>                    </div>';
}elseif ($type==2) {
    echo ' <div>
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="images/face1.png" onclick="selectAnswer(this, '.$id.', 100); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="images/face3.png" onclick="selectAnswer(this, '.$id.', 50); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
    <img class="ques_'.$id.'" src="images/face5.png" onclick="selectAnswer(this, '.$id.', 0); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
</div>                    </div>';
}elseif ($type==3) {
    echo '<div>
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="images/ques1.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="images/ques2.png" onclick="selectAnswer(this, '.$id.', 2); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
    <img class="ques_'.$id.'" src="images/ques3.png" onclick="selectAnswer(this, '.$id.', 3); return false;" style="width: 13%; max-width: 50px; margin-right: 30px;">
</div>                    </div>';
}elseif ($type==4) {
    echo '<div>
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="images/ques1.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="images/ques3.png" onclick="selectAnswer(this, '.$id.', 3); return false;" style="width: 13%; max-width: 50px; margin-right: 50px;">
</div>                    </div>';
}elseif ($type==5) {
    echo '<div>
<div class="CurveBox5" style="width: 100%; margin-top: 5px; padding: 5px; background-color: #ffffff;">
    <img class="ques_'.$id.'" src="images/logicChoice1.png" onclick="selectAnswer(this, '.$id.', 1); return false;" style="width: 13%; max-width: 50px;">
    <img class="ques_'.$id.'" src="images/logicChoice3.png" onclick="selectAnswer(this, '.$id.', 3); return false;" style="width: 13%; max-width: 50px; margin-right: 50px;">
</div>                    </div>';
}elseif ($type==6) {

    echo ' <div>
<div align="right">
    <input class="form-control justNumbers" '.$re.' id="mobile'.$id.'" type="tel" style="width: 200px; margin-top: 5px;" maxlength="10" onfocusout="onNumberInputChange(this,'.$id.',1); return false;" data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="أرقام إنجليزية فقط">
</div>                    </div>';
}elseif ($type==7) {

   
    echo ' <div>
<div align="right">
    <input class="form-control" '.$re.' type="text" style="width: 200px; margin-top: 5px;" maxlength="50" onfocusout="onCharInputChange(this,'.$id.',0); return false;">
</div>                    </div>';
}elseif ($type==8) {

   
    echo '<div>
<textarea class="form-control" '.$re.' style="width: 100%; height: 70px; margin-top: 5px; padding: 5px; resize: none;" maxlength="500" placeholder="اكتب هنا..." onchange="document.getElementById("ansText_'.$id.'").value = this.value;"></textarea>                    </div>';
}elseif ($type==9) {

   
    echo '<div>

    <select class="form-control" onfocusout="onCharInputChange(this,'.$id.',0); ">
            <option>اختر الفرع</option>';

    

 $sql->select3("far","");

 while ($row5=$sql->res3->fetch_assoc()) {
    echo '<option value="'.$row5["id"].'">'.$row5["name"].'</option>';
 }
  





echo' </select> </div>';
}


                    ?>
                    

                </div>

            </div>






<?php
}



}
?>


        </div>
    
    
        <div class="CurveBox5" style="width: 50%; min-width: 180px; margin: 25px 10px 5px 0px; padding: 10px; background-color: #75c34c; cursor: pointer; display: inline-block;" data-toggle="modal" data-target="#myModal3" onclick="showNewQuestionAddDialogBox(); return false;">
            <div style="margin-top: 3px; color: #ffffff;">إضافة سؤال جديد</div>
        </div>
    
    </div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="width: 100%">
            <div class="modal-header" style="position: relative;">
                <button type="button" class="close" data-dismiss="modal" style="z-index: 5;">×</button>
                <div align="center" style="width: 100%; position: absolute; right: 0px;"><font>تعديل</font></div>
            </div>
            
            <div id="modal-body" class="modal-body">
                
            </div>
        </div>

    </div>
</div>
    
    
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="width: 100%; background: #adadad;">
            <div class="modal-header" style="position: relative;">
                <button type="button" class="close" data-dismiss="modal" style="z-index: 5;">×</button>
                <div align="center" style="width: 100%; position: absolute; right: 0px;"><font>هل تريد الإحتفاظ بربط الإجابات السابقة بهذا السؤال؟</font></div>
            </div>
            
            <div id="modal-body2" class="modal-body">
                
            </div>
        </div>

    </div>
</div>
    
    
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="width: 100%">
            <div class="modal-header" style="position: relative;">
                <button type="button" class="close" data-dismiss="modal" style="z-index: 5;">×</button>
                <div align="center" style="width: 100%; position: absolute; right: 0px;"><font>إضافة سؤال جديد</font></div>
            </div>
            
            <div id="modal-body3" class="modal-body">
      
            </div>
        </div>

    </div>
</div>
    
</div>


    </div>
