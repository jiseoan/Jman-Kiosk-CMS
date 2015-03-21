﻿<?PHP
header("Content-Type:text/html; charset=UTF-8"); 
header("Cache-Control:no-cache");
header("Pragma:no-cache");
session_start();

if (!isset($_SESSION['userid']) || strlen($_SESSION['userid']) <= 0) {
	header("Location: ./index.php");
	exit();
}

$menuitem = 2;
?>

<html>
<head>
<title>키오스크 관리자페이지 - <? echo $_SESSION['userid']; ?></title>
<link rel="stylesheet" type="text/css" href="./css/mainpage.css" />
</head>

<body>
<div class="container">

    <div class="menu-bar">
	    <div class="menu-bar-inner">
			<!-- 메뉴 -->
			<?php include 'menu.php'; ?>
	    </div>
    </div> <!-- <div class="menu-bar"> -->

    <div class="contents">
        <div class="contents-inner" style="height: 980px;">
		<!-- 내용-시작 -->



<!-- 타이틀 -->
<div style="position:relative; left:0px; top:30px; width: 100%; height:22px;">
<img src="./image/bulletlt.png"/><label class="main-title" style="position:absolute; left:32px; top:3px;">스케줄관리</label>
</div>

<div style="position:relative; left:0px; top:60px; width: 945px; height:44px; background-image: url(./image/subtitlebg.png); background-repeat: no-repeat;">
<label class="sub-title" style="position:absolute;left:32px; top:15px;" class="subtitle">컨텐츠 업데이트관리</label>
</div>
<iframe style="position:relative; left:0px; top:60px; width: 945px; height:380px;" src="subreleaseman.php" frameborder="0" scrolling="no"></iframe>

<div style="position:relative; left:0px; top:90px; width: 945px; height:44px; background-image: url(./image/subtitlebg.png); background-repeat: no-repeat;">
<label class="sub-title" style="position:absolute;left:32px; top:15px;" class="subtitle">APP 업데이트관리</label>
</div>
<iframe style="position:relative; left:0px; top:90px; width: 945px; height:380px;" src="subappman.php" frameborder="0" scrolling="no"></iframe>


		<!-- 내용-끝 -->
       </div> <!-- <div class="contents-inner"> -->
    </div> <!-- <div class="contents"> -->

    <div class="copyright">
        <div class="copyright-inner">
			<!-- copyright -->
			<?php include 'copyright.php'; ?>
        </div>
    </div> <!-- <div class="copyright"> -->

</div> <!-- <div class="container"> -->

</body>
</html>
