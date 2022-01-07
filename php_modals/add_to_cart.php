<?php
      include_once '../DBEventHandler.php';
      include_once '../eventhandler_DB/constant.php';

      if (!isset($_SESSION['user']) && $_SESSION['type'] == 0)
      {
            $_SESSION['no_user'] = "<p class='error'>Login First</p>";
            header("location:../login_page.php");
      }

      if (isset($_POST['addcart'])){
            $_cart->addCart($_SESSION['user_id'], $_POST['item_id']);
      }

      header("location:".$_POST['url']);