

<html lang="ar" style="height: 100%;"><head>
    <title><?php
$sql->selectall("user limit 1");
while ($row=$sql->res->fetch_assoc()) {
   echo $row['name'].$row['name_c'];
   $logo=$row['logo'];
}
?></title>    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- for iOS -> Safari --> 
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="images/<?=$logo?>">
    <!-- for Android -> Chrome, Firefox and Opera --> 
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" sizes="192x192" href="images/<?=$logo?>">
    <!-- jQuery -->
    <script src="jQuery/jquery-3.2.1.min.js"></script>
    <script src="jQuery/jquery-ui-1.12.1/jquery-ui.js"></script><!-- sortable -->
    <script src="jQuery/jquery-ui-1.12.1/jquery.ui.touch-punch.min.js"></script><!-- sortable for touch devices -->
    <!-- Bootstrap -->
    <link type="text/css" href="bootstrap/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet">
     <script type="text/javascript" src="js/qrcode.js"></script>
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
