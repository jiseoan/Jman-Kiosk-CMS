﻿<?PHP
header("Content-Type:text/html; charset=UTF-8"); 
header("Cache-Control:no-cache");
header("Pragma:no-cache");
session_start();

$curpage = isset($_POST["curpage"]) ? intval($_POST["curpage"]) : 1;
$del = $_POST["del"];
?>

<?php include './common/db.php'; ?>
<?php

$ok = $db->open();

if ($ok) {
	for ($i = 0, $n = count($del) ; $i < $n ; $i++) {
		$str = "UPDATE t_client set reboot = now() where idclient = ".$del[$i].";";
		$db->query($str);
	}

	$db->close();
}
?>

<html>
<body>
<form id="upForm" name="upForm" method="post" action="subkioskman.php">
<input type="hidden" name="curpage" value="<? echo $curpage; ?>" />
</form>
<?php
echo "<script>";
if ($ok) {
	echo "alert('설정하였습니다. 1분 1내에 다시 시작합니다.');";
}
else {
	echo "alert('일부 혹은 전부를 켜지못하였습니다');";
}
echo "upForm.submit();";
echo "</script>";
?>
  
</script>
</body>
</html>
