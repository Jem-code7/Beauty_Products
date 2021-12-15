<?php
      if (!isset($_SESSION['user']) && !isset($_SESSION['type']))
      {
            $_SESSION['no_user'] = "<p class='error'>Login First</p>";
            header("location:".$homeurl."login_page.php");
      }
?>