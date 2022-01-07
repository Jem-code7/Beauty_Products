<?php
      include_once '../DBEventHandler.php';
      include_once '../eventhandler_DB/constant.php';

      if (isset($_POST['submit'])){
            $password = $_POST['password'];
            $email = $_POST['email'];
      
            if ($userdata=mysqli_fetch_assoc(mysqli_query($db->con,"SELECT * FROM tbl_user WHERE email='$email'"))) {
                  if ($userdata['password'] == $password) {
                        if ($userdata['type']) {
                              $_SESSION['login']= "<p class='success'>Login Successfully</p>";
                              $_SESSION['user'] = $userdata['username'];
                              $_SESSION['user_type'] = $userdata['type'];
                              header("Location:".$homeurl."admin_pages/admin_order_management_page.php");
                        }
                        else {
                              $_SESSION['user'] = $userdata['username'];
                              $_SESSION['user_id'] = $userdata['user_id'];
                              $_SESSION['user_type'] = $userdata['type'];
                              header("Location:".$homeurl);
                        }
                        
                        
                  }else{
                        $_SESSION['error'] = "<p class='error'>Wrong Password</p>";
                        header("Location:".$homeurl."login_page.php");
                  }
                  
            }else{
                  $_SESSION['error'] = "<p class='error'>Email Not Registered</p>";
                  header("Location:".$homeurl."login_page.php");
            }      
      }