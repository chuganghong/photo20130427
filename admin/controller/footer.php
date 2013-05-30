<?php
require_once('../common/include.php');
$copyRight = "Powered by Photo 1.1.0 | Template designed by Photo";
$smarty->assign("copyRight",$copyRight);
$smarty->display( TPL . "footer.tpl");