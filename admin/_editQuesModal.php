<?php
include"inc/sql.php";
$id=filter_var($_GET['ques_id'], FILTER_VALIDATE_INT);

 $sql->select1("quiz"," where id =$id");
      while ($row=$sql->res1->fetch_assoc()) {
$type=$row['type'];
$name=$row['name'];
$optional=$row['optional'];
$phone=$row['phone'];
$email=$row['email'];
?>

<input id="ques_id" type="hidden" value="<?=$id?>">

<input id="oldQues" type="hidden" value="<?=$name?>">
<input id="oldAnsType" type="hidden" value="<?=$type?>">
<input id="oldOptional" type="hidden" value="<?=$optional?>">
<input id="oldIsMobile" type="hidden" value="<?=$phone?>">
<input id="oldIsEmail" type="hidden" value="<?=$email?>">

<div class="CurveBox" align="center" style="padding: 10px 20px 5px 20px; background-color: #f7f7f7;">
    <div class="form-group">
        <div align="right"><font>السؤال</font></div>
        <textarea class="form-control" id="ques" style="width: 100%; height: 70px; padding: 5px; resize: none;" maxlength="120" placeholder="السؤال..."><?=$name?></textarea>
    </div>
</div>





<script>
var selectedAnswerType = <?=$type?>;
if(selectedAnswerType == 0) { selectedAnswerType = 1; }

var answerDivHeight_1to5 = 70;
var answerDivHeight_6 = 100;
var answerDivHeight_7 = 100;
var answerDivHeight_8 = 120;
var optionalOrRequiredDivHeight = 150;
var isMobileDiv = 155;
var isEmailDiv = 155;


$(document).ready(function () {
    changeAnswerType(0);
});


function changeAnswerType(i)
{    
    selectedAnswerType = selectedAnswerType + i;
    
    document.getElementById('ansType').value = selectedAnswerType;
    
    
    $('#answerType'+(selectedAnswerType - i)).animate({ top: "500px", }, 200);
    
    if(selectedAnswerType == 1)
    {
        document.getElementById('previousButton').disabled = true;
    }
    else if(selectedAnswerType == 8)
    {
        document.getElementById('nextButton').disabled = true;
    }
    else
    {
        document.getElementById('nextButton').disabled = false;
        document.getElementById('previousButton').disabled = false;
    }
    
    $('#answerType'+selectedAnswerType).animate({ top: "0px", }, 400);
    $('#isMobileDiv').animate({ top: "500px", }, 200);
    $('#isEmailDiv').animate({ top: "500px", }, 200);
    $('#optionalOrRequiredDiv').animate({ top: "500px", }, 200);
    

    if(selectedAnswerType == 6)//إذا كانت الإجابة رقم
    {
        $('#answerTypeContainer').animate({ height: answerDivHeight_6 + optionalOrRequiredDivHeight + isMobileDiv, }, 400);
        $('#isMobileDiv').animate({ top: answerDivHeight_6, }, 400);
        $('#optionalOrRequiredDiv').animate({ top: answerDivHeight_6 + isMobileDiv, }, 400);
    }
    else if(selectedAnswerType == 7)//إذا كانت الإجابة نص قصير
    {
        $('#answerTypeContainer').animate({ height: answerDivHeight_7 + optionalOrRequiredDivHeight + isEmailDiv, }, 400);
        $('#isEmailDiv').animate({ top: answerDivHeight_7, }, 400);
        $('#optionalOrRequiredDiv').animate({ top: answerDivHeight_7 + isEmailDiv, }, 400);
    }
    else if(selectedAnswerType == 8)//إذا كانت الإجابة نص طويل
    {
        $('#answerTypeContainer').animate({ height: answerDivHeight_8 + optionalOrRequiredDivHeight, }, 400);
        $('#optionalOrRequiredDiv').animate({ top: answerDivHeight_8, }, 400);
    }
    else//إذا كانت الإجابة إحصائية
    {
        $('#answerTypeContainer').animate({ height: answerDivHeight_1to5, }, 400);
        $('#optionalOrRequiredDiv').animate({ top: "500px", }, 400);
    }
}
</script>



<div class="CurveBox" align="center" style="margin-top: 30px; padding: 10px 20px 5px 20px; background-color: #f7f7f7; overflow: hidden;">
    <div class="form-group" style="position: relative;">
        <input id="ansType" type="hidden" value="6">
        <div align="center"><font>اختر نموذج الإجابة المطلوب لهذا السؤال</font></div>
        
            <table style="width: 100%;">
                <tbody><tr>
                    <td align="right" style="width: 5px;">
                        <button id="previousButton" class="btn btn-success" onclick="changeAnswerType(-1);" style="width: 40px; margin-left: 10px;"><div style="padding-top: 3px;">&lt;&lt;</div></button>
                    </td>
                    <td align="center">
                        <!--<div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج <font id="ansTypeNumber"></font> من 8</font></div>
                        <div align="center"><font id="ansTypeDescription" style="font-size: 12px;"></font></div>-->
                    </td>
                    <td align="left" style="width: 5px; z-index: 2;">
                        <button id="nextButton" class="btn btn-success" onclick="changeAnswerType(1);" style="width: 40px; margin-right: 10px; z-index: 2;"><div style="padding-top: 3px;">&gt;&gt;</div></button>
                    </td>
                </tr>
            </tbody></table>

<div id="answerTypeContainer" style="margin-top: 10px; position: relative;">

<div id="answerType1" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 1 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">خمسة وجوه تعبيرية</font></div>
    </div>
    <div class="CurveBox5" style="padding: 10px; background: #ffffff; border: solid 2px green;">
        <img src="images/face1.png" style="width: 11%; max-width: 40px;">
        <img src="images/face2.png" style="width: 11%; max-width: 40px; margin-right: 10px;">
        <img src="images/face3.png" style="width: 11%; max-width: 40px; margin-right: 10px;">
        <img src="images/face4.png" style="width: 11%; max-width: 40px; margin-right: 10px;">
        <img src="images/face5.png" style="width: 11%; max-width: 40px; margin-right: 10px;">
    </div>
</div>
<div id="answerType2" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 2 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">ثلاثة وجوه تعبيرية</font></div>
    </div>
    <div class="CurveBox5" style="padding: 10px; background: #ffffff; border: solid 2px green;">
        <img src="images/face1.png" style="width: 11%; max-width: 40px;">
        <img src="images/face3.png" style="width: 11%; max-width: 40px; margin-right: 30px;">
        <img src="images/face5.png" style="width: 11%; max-width: 40px; margin-right: 30px;">
    </div>
</div>
<div id="answerType3" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 3 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">نعم - ربما - لا</font></div>
    </div>
    <div class="CurveBox5" style="padding: 10px; background: #ffffff; border: solid 2px green;">
        <img src="images/ques1.png" style="width: 11%; max-width: 40px;">
        <img src="images/ques2.png" style="width: 11%; max-width: 40px; margin-right: 30px;">
        <img src="images/ques3.png" style="width: 11%; max-width: 40px; margin-right: 30px;">
    </div>
</div>
<div id="answerType4" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 4 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">نعم أو لا</font></div>
    </div>
    <div class="CurveBox5" style="padding: 10px; background: #ffffff; border: solid 2px green;">
        <img src="images/ques1.png" style="width: 11%; max-width: 40px;">
        <img src="images/ques3.png" style="width: 11%; max-width: 40px; margin-right: 50px;">
    </div>
</div>
<div id="answerType5" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 5 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">صح أو خطأ</font></div>
    </div>
    <div class="CurveBox5" style="padding: 10px; background: #ffffff; border: solid 2px green;">
        <img src="images/logicChoice1.png" style="width: 11%; max-width: 40px;">
        <img src="images/logicChoice3.png" style="width: 11%; max-width: 40px; margin-right: 50px;">
    </div>
</div>
<div id="answerType6" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 6 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">الإجابة عبارة عن رقم</font></div>
    </div>
    <div class="CurveBox5" style="padding: 15px; background: #ffffff; border: solid 2px green;">
        <div align="right">
            <font style="color: #656565;">أرقام فقط</font>
            <font style="font-size: 12px; color: #aaaaaa;">(مناسب لرقم الجوال ، العمر ، ...)</font><br>
            <input class="form-control" type="tel" style="width: 200px;" placeholder="23" disabled="">
        </div>
    </div>
</div>
<div id="answerType7" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 7 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">الإجابة عبارة عن نص قصير</font></div>
    </div>
    <div class="CurveBox5" style=" padding: 15px; background: #ffffff; border: solid 2px green;">
        <div align="right">
            <font style="color: #656565;">حقل نصي قصير</font>
            <font style="font-size: 12px; color: #aaaaaa;">(حتى ٥٠ حرف)</font><br>
            <input class="form-control" type="text" style="max-width: 200px;" placeholder="الاسم مثلا.." disabled="">
        </div>
    </div>
</div>
<div id="answerType8" style="width: 100%; position: absolute; top: 500px;">
    <div style="width: 100%; position: absolute; top: -50px; pointer-events: none;">
        <div align="center" style="margin-top: 5px;"><font style="font-size: 12px;">نموذج 8 من 8</font></div>
        <div align="center"><font style="font-size: 12px;">الإجابة عبارة عن نص طويل</font></div>
    </div>
    <div class="CurveBox5" style="padding: 15px; background: #ffffff; border: solid 2px green;">
        <div align="right">
            <font style="color: #656565;">صندوق نص طويل</font>
            <font style="font-size: 12px; color: #aaaaaa;">(حتى ٥٠٠ حرف)</font><br>
            <textarea class="form-control" disabled="" style="width: 100%; padding: 5px; resize: none;" placeholder="صندوق نصي يستطيع العميل فيه أن يكتب بحريه أكبر..
واسطر أكثر.."></textarea>
        </div>
    </div>
</div>



<div id="optionalOrRequiredDiv" align="center" style="width: 100%; margin-top: 10px; position: absolute; top: 500px;">
    <div style="position: relative;">
        <input id="optional" type="hidden" value="1">
        <div class="CurveBox5" style="width: 100%; padding: 5px; background: #ffffff; border: solid 2px #ffffff;">
            <div align="center"><font>تريد جعل الإجابة اختيارية أم إلزامية؟</font></div>
            <div align="center"><font style="font-size: 10px;">إذا اخترت أن تكون الإجابة إلزامية فلن يستطيع العميل ارسال التقييم إلا بعد كتابة شيئ في الحقل</font></div>
            <div style="width: 70%; margin-top: 15px; margin-bottom: 10px;">
                <div class="CurveBox5" id="optional1" style="width: 45%; height: 30px; background: #d3ffd3; border: solid 2px green; padding: 5px; float: right; cursor: pointer;" onclick="optional(1); return false;">
                    <font>اختيارية</font>
                </div>
                <div class="CurveBox5" id="optional0" style="width: 45%; height: 30px; background: #ffffff; border: solid 1px #aaaaaa; padding: 5px; float: left; cursor: pointer;" onclick="optional(0); return false;">
                    <font>إلزامية</font>
                    <font style="color: red;">*</font>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</div>


<div id="isMobileDiv" align="center" style="width: 100%; margin-top: 10px; position: absolute; top: 500px;">
    <div style="position: relative;">
        <input id="isMobile" type="hidden" value="0">
        <div class="CurveBox5" style="width: 100%; padding: 5px; background: #ffffff; border: solid 2px #ffffff;">
            <div align="center"><font>هل الإجابة المطلوبة هي رقم جوال؟</font></div>
            <div align="center"><font style="font-size: 10px;">إذا كان المطلوب هو رقم جوال سيتم فتح قسم خاص بك لإدارة أرقام عملائك، بالإضافة لبعض المميزات الأخرى</font></div>
            <div style="width: 70%; margin-top: 15px; margin-bottom: 10px;">
                <div class="CurveBox5" id="isMobile1" style="width: 45%; height: 30px; background: #ffffff; border: solid 1px #aaaaaa; padding: 5px; float: right; cursor: pointer;" onclick="isMobile(1); return false;">
                    <font>نعم</font>
                </div>
                <div class="CurveBox5" id="isMobile0" style="width: 45%; height: 30px; background: #d3ffd3; border: solid 2px green; padding: 5px; float: left; cursor: pointer;" onclick="isMobile(0); return false;">
                    <font>لا</font>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</div>


<div id="isEmailDiv" align="center" style="width: 100%; margin-top: 10px; position: absolute; top: 500px;">
    <div style="position: relative;">
        <input id="isEmail" type="hidden" value="0">
        <div class="CurveBox5" style="width: 100%; padding: 5px; background: #ffffff; border: solid 2px #ffffff;">
            <div align="center"><font>هل الإجابة المطلوبة هي بريد إلكتروني؟</font></div>
            <div align="center"><font style="font-size: 10px;">إذا كان المطلوب هو بريد إلكتروني سيتم فتح قسم خاص بك لإدارة ايميلات عملائك، بالإضافة لبعض المميزات الأخرى</font></div>
            <div style="width: 70%; margin-top: 15px; margin-bottom: 10px;">
                <div class="CurveBox5" id="isEmail1" style="width: 45%; height: 30px; background: #ffffff; border: solid 1px #aaaaaa; padding: 5px; float: right; cursor: pointer;" onclick="isEmail(1); return false;">
                    <font>نعم</font>
                </div>
                <div class="CurveBox5" id="isEmail0" style="width: 45%; height: 30px; background: #d3ffd3; border: solid 2px green; padding: 5px; float: left; cursor: pointer;" onclick="isEmail(0); return false;">
                    <font>لا</font>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</div>


</div>
    
    
    </div>
</div>



<table style="width: 100%; margin-top: 20px;">
    <tbody><tr align="center">
        <td>
            <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px; border: none;" onclick="cancel();"><div style="margin-top: 3px;">إلغاء</div></button>
        </td>
        <td>
            <button type="button" class="btn btn-success" style="width: 100px; background-color: #75c34c; border: none; " onclick="saveEditedQuestion(<?=$id?>);"><div style="margin-top: 3px;">حفظ</div></button>
        </td>
    </tr>
</tbody></table>

<?php
}
?>