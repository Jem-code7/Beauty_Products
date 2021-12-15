<header>
      <nav class="navbar navbar-expand-lg navbar-light pink-bg ff-andada">
            <!-- Logo -->
            <a class="navbar-brand" href="./index.php"><img src="./img/logo-removebg-preview.png" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                  <!-- Buttons -->
                  <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                              <a class="nav-link" href="./index.php">Coolest Beauty Products <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="./products_gallery.php">  Products </a>
                        </li>
                  </ul>
                  <form class="d-flex flex-row">
                        <input class="form-control mr-1 mt-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success m-2 pink-color fas fa-search" type="submit"></button>
                  </form>
                  <form class="flex icons">
                        <a href="./login_page.php" class="fa fa-user-circle p-2 rounded-pill white-bg">
                              <?php  ?>
                              <span class="black-color ff-andada"> <?php echo (isset($_SESSION['user']))? $_SESSION['user'] : 'Log In' ?></span>
                        </a>
                        <!-- Cart Icon -->
                        <a href="" class="cart-logo p-2 rounded-pill white-bg">
                              <span class="fs-heading2 px-2 gray-color"><i class="fas fa-shopping-cart"></i></span>
                              <span class="px-2 py-2 rounded-pill black-color white-bg">0</span>
                        </a>
                  </form>
            </div>
      </nav>

</header>