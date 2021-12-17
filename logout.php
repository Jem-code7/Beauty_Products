<?php 
      session_start() ;
      session_destroy() ;

      require_once './eventhandler_DB/constant.php';

      header("location:".$homeurl);