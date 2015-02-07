<?php

/*
 * Get browser property
 */

echo $_SERVER['HTTP_USER_AGENT']
."\n\n";
$browser = get_browser(NULL, TRUE);
echo '<pre>';
print_r($browser);
//$var_str="Bangladesh";
//printf($var_str);
//number_format($var_str);
//echo $var_str;
//strlen("Bangladesh");
//echo $var_str;
//$var_kanan = "Bangladesh";
//session_register($var_kanan);
//error handler function
//
//function customError($errno, $errstr)
//{
//    echo "<b>Error:</b> [$errno] $errstr<br />";
//    echo "Webmaster has been notified";
//    error_log("Error: [$errno] $errstr", 1, "someone@example.com", "From: webmaster@example.com");
//}
//
////set error handler
//set_error_handler("customError", E_USER_WARNING);
////trigger error
//$test = 3;
//if ($test > 1)
//{
//    trigger_error("Value must be 1 or below", E_USER_WARNING);
//}
?>
