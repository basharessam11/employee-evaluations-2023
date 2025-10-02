<?php




if (isset($_COOKIE['login1']) and isset($_COOKIE['login2'])  ) {
  header("location:index.php?rate=list");
}



?>


<!DOCTYPE html>

<html lang="ar" style="height: 100%;">

<!-- Mirrored from qaymni.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 22:28:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>قيمني</title>    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../fonts.googleapis.com/iconc484.css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.0/font/bootstrap-icons.css">
    <!-- for iOS -> Safari --> 
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="images/logo_manager_icon.png" />
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
    <link rel="stylesheet" type="text/css" href="stylec81e.css?2" />
    <!-- My javascript -->
    <script type="text/javascript" src="javaScript/javaScript3860.js?v=1"></script>
    <!-- Tap payments Gateway -->
    <script src="../cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.4/bluebird.min.js"></script>
    <script src="../secure.gosell.io/js/sdk/tap.min.js"></script>
</head>

<body id="bodyWidth" onresize="screenResize(); return false;" style="width: 100%; min-height: 100%; padding-bottom: 80px; position: absolute; background-image: url(images/bg4.png); background-size: cover; background-repeat: no-repeat;">


<div align="center" style="width: 100%; min-height: 100%;"><!-- /container -->
    
    <div align="left" style="width: 90%; max-width: 900px; min-height: 100%; position: relative;">
        
        <div style="width: 160px; padding-top: 10px; left: 20px;">
            <a href="index.html"><img src="images/logoc81e.png?2" style="width: 140px;" /></a>
        </div>

    </div>
    
    <div style="width: 90%; max-width: 900px; min-height: 100%;"> 
<div style="margin-top: 100px;">

    <table class="CurveBox20 Shadow1" style="width: 80%; max-width: 400px; padding: 30px; background-color: #f7f7f7; border-collapse: separate; border-spacing: 0px;">
        <tr align="center">
            <td>
                <form role="form" onsubmit="login(); return false;">
                    <table style="width: 100%; max-width: 250px;">
                        <tr>
                            <td>
                                <font style="font-size: 10px;"><b>رقم الجوال</b></font>
                                <input class="form-control justNumbers" id="mobile" type="tel" maxlength="10" placeholder="رقم الجوال" autofocus data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="أرقام إنجليزية فقط" />
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 10px;">
                                <font style="font-size: 10px;"><b>كلمة المرور</b></font>
                                <input class="form-control justPasswords" id="password" type="password" maxlength="20" placeholder="كلمة المرور" data-toggle="popover" data-trigger="manual" data-placement="bottom" data-content="إدخال خاطئ" />
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding-top: 20px;">
                                <button class="btn btn-secondary" type="submit" style="width: 120px; background-color: #ffba00; border: none;"><div style="padding-top: 5px;">دخول</div></button>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>

</div>
        

    </div>

  <div align="center" id="footer" style="width: 90%; height: 80px; position: absolute; bottom: 0px; right: 50%; transform: translate(50%, 0);">
        
       
        <div>
            <a href="terms.php"><font style="font-size: 12px; color: #aaaaaa;">شروط الإستخدام</font></a>
            <font style="font-size: 12px; color: #aaaaaa;">&nbsp;&nbsp;-&nbsp;&nbsp;</font>
            <a href="privacy.php"><font style="font-size: 12px; color: #aaaaaa;">سياسة الخصوصية</font></a>
           
        </div>
        
        <div>
                  © <script>
      document.write(new Date().getFullYear())
      </script>
       <a href="https://www.facebook.com/basharessam11" target="_blank" class="footer-link fw-bolder">❤️ made with  by  bashar essam </a>
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


      <!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">

    </div>

  </div>
</footer>
<!-- / Footer -->
</body></html>