<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
require_once dirname(__FILE__).'/../sandbox/Loader/src/PEAR2/Loader/PEAR2Svn.php';

$a = new PEAR2_Pyrus_Developer_PackageFile_PEAR2SVN(dirname(__FILE__), 'PEAR2_HTTP_Request');


?>
