<?php 
      include_once './main_template/metadata.php';

      if (isset($_SESSION['user']) & isset($_SESSION['user_type'])){     
            if (isset($_SESSION['user']) & $_SESSION['user_type'] == 1)
                  header("Location:".$homeurl."admin_order_management_page.php");
            if (isset($_SESSION['user']) & $_SESSION['user_type'] == 0)
                  header("Location:".$homeurl."user_home.php");
      }
      


      if (isset($_POST['submit'])){
            $password = $_POST['password'];
            $email = $_POST['email'];
      
            if ($userdata=mysqli_fetch_assoc(mysqli_query($db->con,"SELECT * FROM tbl_user WHERE email='$email'"))) {
                  if ($userdata['password'] == $password) {
                        if ($userdata['type']) {
                              $_SESSION['login']= "<p class='success'>Login Successfully</p>";
                              $_SESSION['user'] = $userdata['username'];
                              $_SESSION['user_type'] = $userdata['type'];
                              header("Location:".$homeurl."admin_order_management_page.php");
                        }
                        else {
                              $_SESSION['user'] = $userdata['username'];
                              $_SESSION['user_type'] = $userdata['type'];
                              header("Location:".$homeurl);
                        }

                        
                  }else{
                        $_SESSION['error'] = "<p class='error'>Wrong Password</p>";
                  }
                  
            }else{
                  $_SESSION['error'] = "<p class='error'>Email Not Registered</p>";
            }      
      }
?>

<body>
      <?php include './section_template/heading_header.php' ?>

      <main class="main-site grad-pink-cream">

            <?php include './section_template/login_section.php' ?>

            <?php include './section_template/footer_footer.php' ?>
      </main>

      <?php include_once './main_template/script.php'; ?>
    
</body>
</html>
