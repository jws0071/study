<?php
include "dbconn.php";


$chang_string=$_POST["name"];
$chang_string= ICONV("UTF-8","EUC-KR",$chang_string);


$fin = study_info_update($chang_string);
echo $fin;
?>