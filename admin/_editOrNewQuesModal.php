<?php

$id=filter_var($_GET['ques_id'], FILTER_VALIDATE_INT);
$name=filter_var($_GET['ques'], FILTER_SANITIZE_STRING);
$type=filter_var($_GET['ansType'], FILTER_VALIDATE_INT);
$phone=filter_var($_GET['isMobile'], FILTER_VALIDATE_INT);
$email=filter_var($_GET['isEmail'], FILTER_VALIDATE_INT);
$optional=filter_var($_GET['optional'], FILTER_VALIDATE_INT);





?>
<input id="ques_id" type="hidden" value="<?=$id?>">

<input id="oldQues" type="hidden" value="<?=$name?>">
<input id="oldAnsType" type="hidden" value="<?=$type?>">
<input id="oldOptional" type="hidden" value="<?=$optional?>">
<input id="oldIsMobile" type="hidden" value="<?=$phone?>">
<input id="oldIsEmail" type="hidden" value="<?=$email?>">



<div class="CurveBox" id="optionalOrRequiredDiv" align="center" style="margin-top: 5px; padding: 10px 15px 1px 15px; background-color: #f7f7f7;">
    <div class="form-group">
        <font style="color: #dd0202; font-size: 20px;"><b>مهم!</b></font>
        <div align="right"><font>يبدو أنك غيرت في نص السؤال.. هل هذا التغيير يغير معنى السؤال أم هو مجرد تغيير في الصيغة ويبقى المعنى نفسه؟</font></div>
        <div class="CurveBox5" style="width: 100%; padding: 0px;">
            
            <table style="width: 100%; margin-top: 10px;">
                <tbody><tr align="center">
                    <td style="width: 48%; vertical-align: bottom;">
                        <div class="CurveBox5" style="padding: 10px; background-color: #ffffff;">
                            <font style="font-size: 12px;">
                                ستبقى نفس الإجابات السابقة مرتبطة بهذا السؤال، فقط يتم تحديث النص.
                                <br><br>
                                <font style="color: #dd0202;">مثال:</font>
                                <br>
                                السؤال القديم:
                                <br>
                                كيف تقيم النظافة؟
                                <br>
                                السؤال الجديد:
                                <br>
                                مدى رضاك عن النظافة؟
                            </font>
                            <button class="btn btn-success" id="optional0" style="width: 100%; background-color: #75c34c; border: none;" onclick="updateQues(); return false;">
                                <font style="font-size: 12px;">مجرد تغيير في الصيغة</font>
                            </button>
                        </div>
                    </td>
                    <td style="width: 4%;"></td>
                    <td style="vertical-align: bottom;">
                        <div class="CurveBox5" style="padding: 10px; background-color: #ffffff;">
                            <font style="font-size: 12px;">
                                سيكون سؤال جديد تماما وسيلغي السؤال القديم.
                                <br><br>
                                <font style="color: #dd0202;">مثال:</font>
                                <br>
                                السؤال القديم:
                                <br>
                                كيف تقيم النظافة؟
                                <br>
                                السؤال الجديد:
                                <br>
                                تقييمك لتعامل الموظف؟
                            </font>
                            <button class="btn btn-success" id="optional1" style="width: 100%; background-color: #75c34c; border: none;" onclick="addNewQuesAndDeleteOld(); return false;">
                                <font style="font-size: 12px;">معنى السؤال تغير</font>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody></table>
            
        </div>
    </div>
</div>