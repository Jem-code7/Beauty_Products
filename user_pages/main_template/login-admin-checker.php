<?php
      if (!isset($_SESSION['user']) && $_SESSION['type'] == 0)
      {
            $_SESSION['no_user'] = "<p class='error'>Login First</p>";
            header("location:../login_page.php");
      }
?>