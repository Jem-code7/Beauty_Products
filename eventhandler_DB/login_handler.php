<?php

class login
{
      public $db = null;

      public function __construct(connection_handler $db)
      {
            if(!isset($db->con)) return null;
            $this->db = $db;
      }

      public function checkUser($email, $pass, $con)
      {
            if($email != null && $pass != null)
            {
                  $c_email=mysqli_real_escape_string($con,$email);
                  $c_pass=mysqli_real_escape_string($con, $pass);

                  $sql_c="SELECT * FROM tbl_user WHERE email={$c_email} AND password={$c_pass}";
                  $result=mysqli_query($con,$sql_c);
                  return $result;
            }
      }
}