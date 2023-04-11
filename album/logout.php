<meta charset="utf-8">
<?php
@session_start();
	unset($_SESSION['ses_aid']);
	unset($_SESSION['ses_aname']);
	echo "<script>";
	echo "window.location='index.php'";
	echo "</script>";

?>
