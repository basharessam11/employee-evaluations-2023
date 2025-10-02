<html lang="ar" style="height: 100%;"><head>
    <title>قيمني إدارة</title>    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- for iOS -> Safari --> 
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="images/logo_manager_icon.png">
    <!-- for Android -> Chrome, Firefox and Opera --> 
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" sizes="192x192" href="images/logo_manager_icon.png">
    <!-- jQuery -->
    <script src="jQuery/jquery-3.2.1.min.js"></script>
    <script src="jQuery/jquery-ui-1.12.1/jquery-ui.js"></script><!-- sortable -->
    <script src="jQuery/jquery-ui-1.12.1/jquery.ui.touch-punch.min.js"></script><!-- sortable for touch devices -->
    <!-- Bootstrap -->
    <link type="text/css" href="bootstrap/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/bootstrap-4.6.0/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap datepicker -->
    <link type="text/css" href="bootstrap/datepicker/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="bootstrap/datepicker/jquery-ui.js"></script>
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css?2">
    <!-- My javascript -->
    <script type="text/javascript" src="javaScript/javaScript.js?v=1"></script>
    <!-- Tap payments Gateway -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.4/bluebird.min.js"></script>
    <script src="https://secure.gosell.io/js/sdk/tap.min.js"></script>
</head>

<body id="bodyWidth" onresize="screenResize(); return false;" style="width: 100%; min-height: 100%; padding-bottom: 80px; position: absolute; background-image: url(images/bg4.png); background-size: cover; background-repeat: no-repeat;">


<div align="center" style="width: 100%; min-height: 100%;"><!-- /container -->
    
    <div align="left" style="width: 90%; max-width: 900px; min-height: 100%; position: relative;">
        
        <div style="width: 160px; padding-top: 10px; left: 20px;">
            <a href="index.php"><img src="images/logo.png?2" style="width: 140px;"></a>
        </div>
        <div align="center" style="min-height: 100%;">

        </div>
    </div>
    
    <div style="width: 90%; max-width: 900px; min-height: 100%;"><script>//<!-- sortable -->
    $(document).ready(function () {
        screenResize();
    });
</script>



<div id="blackScreen" style="background-color: #000000; opacity: 0.3; width: 100%; height: 100%; top: 0px; bottom: 0px; right: 0px; left: 0px; display: none; position: fixed; z-index: 2;" onclick="hideSideLinks(); return false;"></div>

<div align="left" id="sideLinksDiv" class="CurveBottomLeft50 Shadow2" style="background-color: rgb(221, 221, 221); width: 250px; top: 0px; right: 0px; position: fixed; z-index: 300;">
    
    <!--<div align="center" class="CurveBottomLeft10" style="width: 80px; height: 30px; padding-top: 5px; color: #ffffff; position: absolute; top: 0px; left: -80px; background: #b7b7b7; cursor: pointer;" onclick="window.location = 'myAccount.php?s=subscription'">المجانية</div>-->
    
    <div style="height: 60px; background-color: #6dba82; border-bottom: solid 1px #ffffff;">
        <div align="right" style="width: 200px; height: 100%; padding: 10px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
            <font style="color: #ffffff; font-size: 16px;"><b>شركة ..</b></font><br>
            <font style="color: #ffffff;">عيسى المطيري</font>
        </div>
        <div style="width: 50px; height: 100%; position: absolute; top: 0px; left: 0px;">
            <div align="center" id="showButton" style="padding-top: 16px; cursor: pointer; display: none;" onclick="showSideLinks(); return false;" onmouseover="this.style.filter = 'invert(0.7)';" onmouseout="this.style.filter = 'invert(0)';">
                <img src="images/sideLinksButton.png" style="width: 20px; filter: invert(1);">
            </div>
            <div align="center" id="hideButton" style="padding-top: 16px; display: none; cursor: pointer;" onclick="hideSideLinks(); return false;" onmouseover="this.style.filter = 'invert(0.7)';" onmouseout="this.style.filter = 'invert(0)';">
                <img src="images/xButtonBlack.png" style="width: 25px; filter: invert(1);">
            </div>
        </div>
    </div>
    
    <div id="list">
        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #6dba82;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '#6dba82';" onclick="window.location = 'myAccount.php?s=view';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>تقييمات العملاء</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 0px;">
                <!--<img src="images/viewQuestions_icon.png" style="width: 16px;" />-->
                <i class="material-icons-outlined" style="font-size: 24px;">article</i>
            </div>
        </div>

        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=questions';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>أسئلة التقييم</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 1px;">
                <!--<img src="images/editQuestions_icon.png" style="width: 20px;" />-->
                <i class="material-icons-round" style="font-size: 24px;">edit</i>
            </div>
        </div>

        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=url';">
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
        
        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=subscription';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>الاشتراكات</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 10px; position: absolute; top: 0px; left: 0px;">
                <img src="images/subscription_icon.png" style="width: 19px;">
            </div>
        </div>
        
        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=mobiles';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>جوالات العملاء</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                <i class="material-icons-round" style="font-size: 25px;">phone</i>
            </div>
        </div>
        
        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=emails';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>ايميلات العملاء</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                <i class="material-icons-round" style="font-size: 25px;">alternate_email</i>
            </div>
        </div>
        
        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=badges';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>أوسمتي</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                <i class="material-icons-round" style="font-size: 25px;">emoji_events</i>
            </div>
        </div>
        
        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd; display: none;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=organization';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>ملف المنشأة</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                <img src="images/organization_icon.png" style="width: 24px;">
                <!--<i class="material-icons-round" style="font-size: 26px;">storefront</i>-->
                <!--<i class="material-icons-outlined" style="font-size: 26px;">face</i>-->
            </div>
        </div>
        
        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=profile';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>الملف الشخصي</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 0px;">
                <!--<img src="images/profile_icon.png" style="width: 19px;" />-->
                <i class="material-icons-round" style="font-size: 26px;">person</i>
                <!--<i class="material-icons-outlined" style="font-size: 26px;">face</i>-->
            </div>
        </div>

        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff; background-color: #dddddd;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'myAccount.php?s=support';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>الدعم الفني</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 6px; position: absolute; top: 0px; left: 0px;">
                <!--<img src="images/support_icon.png" style="width: 16px;" />-->
                <i class="material-icons-round" style="font-size: 24px;">headset_mic</i>
            </div>
        </div>

        <div style="height: 39px; margin-top: 1px; position: relative; cursor: pointer; border-bottom: solid 1px #ffffff;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '';" onclick="window.location = 'logout.php';">
            <div align="right" style="width: 200px; height: 100%; padding: 8px 20px 0px 0px; position: absolute; top: 0px; right: 0px;">
                <font>تسجيل خروج</font>
            </div>
            <div align="center" style="width: 50px; height: 100%; padding-top: 5px; position: absolute; top: 0px; left: 0px;">
                <!--<img src="images/logout_icon.png" style="width: 16px;" />-->
                <i class="material-icons-round" style="font-size: 26px;">power_settings_new</i>
            </div>
        </div>
    </div>
    
    <div align="center" class="CurveBottomLeft50" id="slideUp" style="width: 50px; height: 50px; padding-top: 9px; position: relative; cursor: pointer;" onclick="slideUp(); return false;" onmouseover="this.style.filter = 'invert(0.7)';" onmouseout="this.style.filter = 'invert(0)';">
        <img src="images/arrowUp.png" style="width: 20px; filter: invert(1);">
    </div>
    
    <div align="center" class="CurveBottomLeft50" id="slideDown" style="width: 50px; height: 50px; padding-top: 9px; position: relative; cursor: pointer; display: none;" onclick="slideDown(); return false;" onmouseover="this.style.filter = 'invert(0.7)';" onmouseout="this.style.filter = 'invert(0)';">
        <img src="images/arrowDown.png" style="width: 20px; filter: invert(1);">
    </div>
    
</div>

<!------- PopUp Messeges ------->
<div id="blackScreenPopUp" style="background-color: #000000; opacity: 0; width: 100%; height: 100%; top: 0px; bottom: 0px; right: 0px; left: 0px; position: fixed; z-index: 390; transition : all 0.3s; -wekit-transition : all 0.3s; -moz-transition : all 0.3s; display: none;"></div>

<div class="CurveBox5" id="PopUp" style="width: 95%; max-width: 600px; background-color: #ffffff; padding: 30px 15px 30px 15px; border: solid 1px black; margin: auto; margin-top: -1000px; right: 0px; left: 0px; position: absolute; z-index: 400; transition : all 0.6s; -wekit-transition : all 0.6s; -moz-transition : all 0.6s; display: none;">
    <div id="message"></div>
</div>
<!------------------------------>


<div class="CurveBox20 Shadow1" style="width: 100%; max-width: 900px; min-height: 500px; margin-top: 20px; margin-bottom: 50px; background-color: #f7f7f7; padding: 20px 15px 30px 15px;">




<div>
    <font>تقييمات العملاء</font>
    
    <table style="width: 90%; border-collapse: separate; border-spacing: 5px;">
        <tbody><tr align="center" style="height: 45px;">
            <td class="CurveBox5" style="width: 33%; background-color: #6dba82; padding-top: 7px; cursor: pointer;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '#6dba82';" onclick="changeResultsFormat('individual');">تقييمات الأفراد</td>
            
            <td class="CurveBox5" style="width: 34%; background-color: rgb(221, 221, 221); padding-top: 7px; cursor: pointer;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '#dddddd';" onclick="changeResultsFormat('written');">الإجابات الكتابية</td>
            
            <td class="CurveBox5" style="width: 33%; background-color: #dddddd; padding-top: 7px; cursor: pointer;" onmouseover="this.style.backgroundColor = '#6dba82';" onmouseout="this.style.backgroundColor = '#dddddd';" onclick="changeResultsFormat('statistic');">الإجابات الإحصائية</td>
        </tr>
    </tbody></table>
    
    <table style="width: 90%; margin-top: 20px; border-collapse: separate; border-spacing: 5px;">
        <tbody><tr align="center" style="height: 28px;">
            <td class="CurveBox5" style="width: 25%; background-color: #dddddd; padding-top: 4px; cursor: pointer;" onmouseover="this.style.backgroundColor = '#ffba00';" onmouseout="this.style.backgroundColor = '#dddddd';" onclick="changeResultsPeriod('d');">يوم</td>
            
            <td class="CurveBox5" style="width: 25%; background-color: rgb(221, 221, 221); padding-top: 4px; cursor: pointer;" onmouseover="this.style.backgroundColor = '#ffba00';" onmouseout="this.style.backgroundColor = '#dddddd';" onclick="changeResultsPeriod('w');">أسبوع</td>
            
            <td class="CurveBox5" style="width: 25%; background-color: #dddddd; padding-top: 5px; cursor: pointer;" onmouseover="this.style.backgroundColor = '#ffba00';" onmouseout="this.style.backgroundColor = '#dddddd';" onclick="changeResultsPeriod('m');">شهر</td>
            
            <td class="CurveBox5" style="width: 25%; background-color: #ffba00; padding-top: 5px; cursor: pointer;" onmouseover="this.style.backgroundColor = '#ffba00';" onmouseout="this.style.backgroundColor = '#ffba00';" onclick="changeResultsPeriod('y');">سنة</td>
        </tr>
    </tbody></table>
    
    <div style="margin-top: 30px; margin-right: 15px;">
<div style="margin-right: 10px; margin-left: 20px; margin-bottom: 30px;">
<table style="width: 100%;">
    <tbody><tr>
        <td align="left" style="vertical-align: middle;">
            <div style="width: 30px; cursor: pointer;" onclick="changeResultsIndex(-1);" onmouseover="this.style.webkitFilter = 'invert(0.5)';" onmouseout="this.style.webkitFilter = 'none';"><img src="images/arrowRight.png" style="width: 25px; filter: invert(0.7);"></div>
        </td>
        <td align="center" style="width: 50%; min-width: 200px; vertical-align: middle;">2022</td>
        <td align="right" style="vertical-align: middle;">
            <div style="width: 30px; cursor: pointer;" onclick="changeResultsIndex(1);" onmouseover="this.style.webkitFilter = 'invert(0.5)';" onmouseout="this.style.webkitFilter = 'none';"><img src="images/arrowLeft.png" style="width: 25px; filter: invert(0.7);"></div>
        </td>
    </tr>
</tbody></table>
</div>
<div align="center" style="font-size: 12px; color: #aaaaaa;">عدد الإجابات: 11</div>
        <div class="CurveBox" id="customer_166801729793_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">1</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10809').toggle('fast');">
                
                <img id="delete_icon_10809" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166801729793);} else {$('#delete_icon_10809').hide('fast');}">
                
                2022-11-09&nbsp;&nbsp;&nbsp;09:08 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">نوال</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0504196277</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5select.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5select.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3select.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;">انا ما استكملت العلاج و لا دخلت ع الطبيب و السبب انو عندي ربو ع علاج و المركز يفوح منه عطورات بسبب الفواحات العطريه تاقويه التي تكتم الصدر و لا قدرت انتظر بسبب هذا الشي و كذلك ممكن يكون ايضا بسبب مشكله للمرضى المراجعين نامل ازاله المعطر لتقديم خدمه افضل </div></div>
        <div class="CurveBox" id="customer_166787449157_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">2</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10652').toggle('fast');">
                
                <img id="delete_icon_10652" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166787449157);} else {$('#delete_icon_10652').hide('fast');}">
                
                2022-11-08&nbsp;&nbsp;&nbsp;05:28 AM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">Abdoukarim abboud</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0565977794</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;">خدمة ممتازة والله يوفقكم بلتوفيق </div></div>
        <div class="CurveBox" id="customer_166784527555_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">3</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10645').toggle('fast');">
                
                <img id="delete_icon_10645" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166784527555);} else {$('#delete_icon_10645').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;09:21 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">طارق العنزي</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0504669880</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;"></div></div>
        <div class="CurveBox" id="customer_166783862228_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">4</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10628').toggle('fast');">
                
                <img id="delete_icon_10628" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166783862228);} else {$('#delete_icon_10628').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;07:30 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">محمد مبارك القحطاني </div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0552111148</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;"></div></div>
        <div class="CurveBox" id="customer_166783226203_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">5</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10621').toggle('fast');">
                
                <img id="delete_icon_10621" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166783226203);} else {$('#delete_icon_10621').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;05:44 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">nawah</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0568878790</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5select.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5select.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5select.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3select.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;">دكتور الاسنان سيئ جدا وتعامله سيئ كسر اسناني وانا فقط سويت تنظيف .. </div></div>
        <div class="CurveBox" id="customer_166783088812_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">6</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10614').toggle('fast');">
                
                <img id="delete_icon_10614" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166783088812);} else {$('#delete_icon_10614').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;05:21 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">ممدوح </div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0538830535</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;">لا </div></div>
        <div class="CurveBox" id="customer_166783040617_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">7</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10607').toggle('fast');">
                
                <img id="delete_icon_10607" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166783040617);} else {$('#delete_icon_10607').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;05:13 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">&#x202C;فريدة نواف الشامان</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0506949826</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;"></div></div>
        <div class="CurveBox" id="customer_166783021295_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">8</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10600').toggle('fast');">
                
                <img id="delete_icon_10600" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166783021295);} else {$('#delete_icon_10600').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;05:10 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">زياداحمدمحمد</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0503940459</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;">تعامل ولااروع ممتاز جدا</div></div>
        <div class="CurveBox" id="customer_166782996725_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">9</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10593').toggle('fast');">
                
                <img id="delete_icon_10593" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166782996725);} else {$('#delete_icon_10593').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;05:06 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">نوال الشمري </div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0556886740</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;"></div></div>
        <div class="CurveBox" id="customer_166782899486_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">10</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10586').toggle('fast');">
                
                <img id="delete_icon_10586" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166782899486);} else {$('#delete_icon_10586').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;04:49 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">حوريه خليف ضويحي جاسر </div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0509450402</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;">أشكر جميع المشرفين على خدماتهم لنا </div></div>
        <div class="CurveBox" id="customer_166782270861_answers" style="width: 96%; max-width: 600px; background-color: #ffffff; margin: 10px 0px 30px 0px; padding: 18px 10px 2px 10px; border: solid 1px #d9d9d9; position: relative;">
            <div style="position: absolute; top: 5px; right: 12px; font-size: 12px; color: #aaaaaa;">11</div>
            <div dir="ltr" style="position: absolute; top: 2px; left: 12px; font-size: 12px; color: #aaaaaa;">
                <img src="images/threeDots_icon.png" style="width: 20px; margin-right: 20px; cursor: pointer;" onclick="$('#delete_icon_10573').toggle('fast');">
                
                <img id="delete_icon_10573" src="images/delete_icon.png" style="width: 16px; margin-right: 20px; display: none; cursor: pointer;" onclick="if(confirm('هل أنت متأكد من حذف هذا التقييم؟')) {deleteAnswer(166782270861);} else {$('#delete_icon_10573').hide('fast');}">
                
                2022-11-07&nbsp;&nbsp;&nbsp;03:05 PM
            </div>
            
            <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">الأسم</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">علي هلال المالكي</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">رقم الجوال</div><div align="right" style="padding: 10px 10px 5px 10px; color: #088908;">0558959666</div>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الأستقبال ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك عن الخدمة من قبل الطبيب ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">مدى رضاك بشكل عام ؟</div><table style="width: 80%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 33%;">
            <img src="images/face1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 34%;">
            <img src="images/face3.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 33%;">
            <img src="images/face5.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">هل تمت المعالجة بالشكل المطلوب ؟</div><table style="width: 50%; max-width: 300px; margin-top: 5px; margin-bottom: 20px;">
    <tbody><tr align="center">
        <td style="width: 50%;">
            <img src="images/ques1select.png" style="width: 30px; max-width: 100%;">
        </td>
        <td style="width: 50%;">
            <img src="images/ques3.png" style="width: 30px; max-width: 100%;">
        </td>
    </tr>
</tbody></table>
        <hr style="margin-top: 5px;">
            <div align="right" style="margin-top: -5px;">يسعدنا عزيزنا تقديم ملاحظاتك ،،</div><div align="right" style="padding: 10px; color: #088908;"></div></div>    </div>
        
</div>
    
</div>


    </div>

    <div align="center" id="footer" style="width: 90%; height: 80px; position: absolute; bottom: 0px; right: 50%; transform: translate(50%, 0);">
        <font style="font-size: 12px; color: #aaaaaa;">جميع الحقوق محفوظة © 2022 - 2021</font>
        <img src="images/HoogaLogo.png" style="height: 12px; margin-top: -1px; filter: invert(0.6);">
        <div>
            <a href="terms.php"><font style="font-size: 12px; color: #aaaaaa;">شروط الإستخدام</font></a>
            <font style="font-size: 12px; color: #aaaaaa;">&nbsp;&nbsp;-&nbsp;&nbsp;</font>
            <a href="privacy.php"><font style="font-size: 12px; color: #aaaaaa;">سياسة الخصوصية</font></a>
            <font style="font-size: 12px; color: #aaaaaa;">&nbsp;&nbsp;-&nbsp;&nbsp;</font>
            <a href="contact.php"><font style="font-size: 12px; color: #aaaaaa;">تواصل معنا</font></a>
        </div>
        
        <div>
            <img src="images/mada.png" style="height: 22px; margin-right: 0px; margin-left: 5px; display: ;">
            <img src="images/master_visa.png" style="height: 30px; margin-right: 10px; margin-left: 5px; display: none;">
            <img src="images/paymentLogo_mada.svg" style="height: 35px; margin-right: 0px; margin-left: 5px; display: none;">
            <img src="images/paymentLogo_mastercard.svg" style="height: 35px; margin-right: 10px; margin-left: 5px; display: ;">
            <img src="images/paymentLogo_visa.svg" style="height: 35px; margin-right: 10px; margin-left: 5px; display: ;">
            <img src="images/paymentLogo_americanExpress.svg" style="height: 30px; margin-right: 10px; margin-left: 5px; display: none;">
            <img src="images/applePay_icon.svg" style="height: 25px; margin-right: 10px; margin-left: 5px; display: ;">
            <img src="images/stcpay.png" style="height: 20px; margin-right: 10px; margin-left: 5px; display: none;">
            <img src="images/paypal.png" style="height: 34px; margin-right: 10px; margin-left: 5px; display: none;">
        </div>
        
        <div style="visibility: hidden;"><!-- لن يتم عرض شيء هنا ولكن ليتم تحميل الصور فور الإنتهاء من تحميل الصفحة فتصبح جاهزه إذا تم الضغط عليها -->
            <img src="images/face1select.png" style="height: 10px;">
            <img src="images/face2select.png" style="height: 10px;">
            <img src="images/face3select.png" style="height: 10px;">
            <img src="images/face4select.png" style="height: 10px;">
            <img src="images/face5select.png" style="height: 10px;">
            <img src="images/ques1select.png" style="height: 10px;">
            <img src="images/ques2select.png" style="height: 10px;">
            <img src="images/ques3select.png" style="height: 10px;">
            <img src="images/logo_manager_icon.png" style="height: 10px;">
            <img src="images/logo_dashboard_icon.png" style="height: 10px;">
        </div>
    </div>

</div>


</body></html>