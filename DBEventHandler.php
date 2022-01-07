<?php

require_once ('eventhandler_DB/connection_handler.php');
require_once ('eventhandler_DB/banner_handler.php');
require_once ('eventhandler_DB/login_handler.php');
require_once ('eventhandler_DB/full_product_handler.php');
require_once ('eventhandler_DB/cart_handler.php');

$db = new connection_handler();
$_banner = new Banner($db);
$_login = new Login($db);
$_f_product = new f_product($db);
$_cart = new cart($db);