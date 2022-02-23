<?php
header("Content-Type: text/plain");
$TEXT = $_GET["password"];
$Count = 0;
$Count = strlen($TEXT);      //клв символов в пароле
IF ($Count > 0) {
  $Count = 4 * $Count; 	
}
$Count2 = strlen(preg_replace('/[^\d]/','',$TEXT)); //клв цифр в пароле
IF ($Count2 > 0) {
	echo
  $Count += (4 * $Count2); 	
}
$Count3 = preg_match_all("/[A-Za-z]/", $TEXT);     //клв символов в регистре и нет
IF ($Count3 > 0){
	$Count += (($Count - $Count3)*2);
}
IF ((preg_match("/^([0-9])+$/", $TEXT)) OR (preg_match("/^([A-Za-z])+$/", $TEXT))){   //если только цифры                                           
  echo "Только Цифры или буквы \n";  //удалить 
  $Count -= $Count2;    
}

foreach (count_chars($TEXT, 1) as $i => $val) {
   echo  "встречается в строке $val раз(а).\n";    //удалить
   if ($val % 2 == 0){
	   $Count4 += $val;
   }
}
$Count += ($Count4 / 2);

echo "Повторы = ", $Count4, "\n";         //удалить
echo "Надежность пароля = ", $Count, "\n";
echo "Цифры = ", $Count2, "\n";         //удалить 
echo "Регистры и не рег = ", $Count3;            //удалить 
?>