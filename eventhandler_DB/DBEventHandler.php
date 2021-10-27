<?php

require_once ('./eventhandler_DB/connection_handler.php');
require_once ('./eventhandler_DB/banner_handler.php');
require_once ('./eventhandler_DB/login_handler.php');

$db = new connection_handler();
$_banner = new Banner($db);
$_login = new Login($db);
