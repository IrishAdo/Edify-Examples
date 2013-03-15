<?php
// this version of the example will NOT use the auto loading classes.
// so you must include all the classes to make this run

define("PP_NET_CL_PATH", realpath("../../../../Edify"));
require_once PP_NET_CL_PATH . "/Utils/Log.php";
require_once PP_NET_CL_PATH . "/Cache/Factory.php";
require_once PP_NET_CL_PATH . "/Cache/Dynamic.php";
require_once PP_NET_CL_PATH . "/Cache/Statics.php";

require_once 'example1.php';
?>
