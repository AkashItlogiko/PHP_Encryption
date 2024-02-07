<?php
// ay encryption security jonna crypt MD5 used kora hoyasa.

$userName  = $_REQUEST['username'];
$userEmail = $_REQUEST['email'];
$userPass  = $_REQUEST['password'];

$hash_format =  '$1$';
$salt ="abacas;dsadff11";
$conC = $hash_format.$salt;
echo $userPass;
echo "<br>";
echo crypt($userPass, $conC);

?>