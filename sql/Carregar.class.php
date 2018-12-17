<?php
function __autoload($classe) {
    
	$dir = str_replace("\\","/",dirname(__FILE__));
	if(file_exists($dir."/".$classe.".class.php")) {
		include($dir."/".$classe.".class.php");
	}
}

?>
