<?php 
      include_once './main_template/metadata.php';

      if (isset($_SESSION['user']) & isset($_SESSION['user_type'])){     
            if (isset($_SESSION['user']) & $_SESSION['user_type'] == 1)
                  header("Location:".$homeurl."admin_pages/admin_order_management_page.php");
            if (isset($_SESSION['user']) & $_SESSION['user_type'] == 0)
                  header("Location:".$homeurl."user_pages/user_home.php");
      }

?>

<body >
      <?php include './section_template/heading_header.php' ?>

      <main class="main-site grad-pink-cream">

            <?php include './section_template/login_section.php' ?>

            <?php include './section_template/footer_footer.php' ?>
      </main>

      <?php include_once './main_template/script.php'; ?>
    
</body>
</html>
