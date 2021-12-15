<?php
      // Note*
            // $_GET['table'] contains table to delete to
            // $_GET['$id'] contains the id to delete

      session_start();

      include_once './eventhandler_DB/constant.php';
      require './eventhandler_DB/DBEventHandler.php';

      $id_db = $_GET['id_db'];
      $id = $_GET['id'];
      $table = $_GET['table'];
      $return_url = $_GET['url'];

      $sql="DELETE FROM $table WHERE $id_db='$id'";

      $_SESSION['result']=(mysqli_query($db->con, $sql))?
            "<div class='success'>Item Delete Successfully</div>":
            "<div class='error'>Fail to Delete Item</div>";

      header("location:".$homeurl.$return_url);



