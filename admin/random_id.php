<?php
/* Confirmation Code */
function createRandomPassword() {
    $chars = "01234567899876543210";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
   					 }
    return $pass;
						}
						
/*values*/
$code = createRandomPassword();
?>