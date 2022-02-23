<?php
$TEXT = $_GET["identifier"];
if ((ctype_alpha($TEXT)) OR (is_numeric($TEXT))){
	echo "yes";
}
else{
	echo "no, wrong SR3";
}
?>