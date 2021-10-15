<?php

require ('./eventhandler_DB/DBConnection.php');
require ('./eventhandler_DB/banner_handler.php');

$db = new DBConnection();
$banner = new Banner();