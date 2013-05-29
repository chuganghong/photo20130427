<?php
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) . '/common/');
include("include.php");
$copyRight = "Powered by Photo 1.1.0 | Template designed by Photo";
$smarty->assign("copyRight",$copyRight);
$smarty->display("../templates/footer.tpl");