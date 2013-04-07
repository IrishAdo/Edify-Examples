<?php

define("PP_NET_CL_PATH", realpath("../../../../Edify"));
require_once PP_NET_CL_PATH . "/Utils/Loader.php";

//The following variables could have been passed as parameters so while you
//know that a number is a number your php script is storing it as a string.
$aString = "abc";     //  could be text or numbers of symbols
$aNumber = "1234";    // a natural number no decimal numbers
$aReal   = "123.40";  // a real number has decimal places
$aValidEmail2 = "irishado@hotmail.com";
$aValidEmail1 = "irishado@hotmail.com";
$aInValidEmail = "irishadohotmailcom";

$sanitise = new \Edify\Utils\Sanitise();
print "<ol>";
try {
    print "<li> ".$sanitise->isText($aString);
    print "<li> ".$sanitise->isNatural($aString);
    print "<li> ".$sanitise->isReal($aString);
} catch (\Edify\Exceptions\Sanitise $e){
    print "<li> error -> ".$e->getMessage();
}
print "</ol><ol>";
try {
    print "<li> ".$sanitise->isText($aNumber);
    print "<li> ".$sanitise->isNatural($aNumber);
    print "<li> ".$sanitise->isReal($aNumber);
} catch (\Edify\Exceptions\Sanitise $e){
    print "<li> error -> ".$e->getMessage();
}
print "</ol><ol>";

try {
    print "<li> ".$sanitise->isText($aReal);
    print "<li> ".$sanitise->isNatural($aReal);
    print "<li> ".$sanitise->isReal($aReal);
} catch (\Edify\Exceptions\Sanitise $e){
    print "<li> error -> ".$e->getMessage();
}
print "</ol><ol>";

try {
    print "<li> ".$sanitise->isEmail($aValidEmail1);
    print "<li> ".$sanitise->isEmail($aValidEmail2);
    print "<li> ".$sanitise->isEmail($aInValidEmail);
} catch (\Edify\Exceptions\Sanitise $e){
    print "<li> error -> ".$e->getMessage();
}
print "</ol>";


print "<br> The variable \$aReal is a string => ";
var_dump($aReal);
print "<br> The result of the Sanitise function isReal returns a float => ";
var_dump($sanitise->isReal($aReal));
print "<br> printing the real number => ";
print $sanitise->isReal($aReal);

print "<br>Notice the zero is removed from the end of the digit. to put it back you must use the number formating function to force 2 decimal places.";




?>
