<?php
	@session_start();

	session_destroy();

	echo "Just moment,please.....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=cake.php\">";


?>
<meta charset="utf-8">