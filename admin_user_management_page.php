<?php
      include_once "./main_template/metadata.php";
?>
<body>
      <section class="banner grad-pink-cream">
            <div class="p-4">
                  <a href="" class="float-left"><img src="./img/logo-removebg-preview.png" alt="" style="width:8em"></a>
                  <h1 class="text-center" style="padding-top:1em; padding-bottom:1em;">Coolest Beauty Products</h1>
            </div>
      </section>

      <section class="top-nav white-bg">
            <nav class="navbar navbar-expand-lg navbar-light  ff-andada">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                        <!-- Buttons -->
                        <ul class="navbar-nav mr-auto ml-5 my-2 my-lg-0 navbar-nav-scroll">
                              <li class="nav-item">
                                    <a class="nav-link" href="./index.php">Manage Orders <span class="sr-only"></span></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="./index.php">Manage Users <span class="sr-only"></span></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="./index.php">Manage Inventory <span class="sr-only"></span></a>
                              </li>
                        </ul>
                        <form class="d-flex flex-row">
                              <input class="form-control mr-1 mt-1" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success m-2 fas fa-search" type="submit"></button>
                        </form>
                        <form class="flex icons mr-5">
                              <a href="./login_page.php" class="fa fa-user-circle p-2 rounded-pill white-bg">
                                    <span class="black-color ff-andada"> Log Out </span>
                              </a>
                              <a href="./login_page.php" class="p-2 rounded-pill white-bg">
                                    <span class="black-color ff-andada"> Update </span>
                              </a>
                        </form>
                  </div>
            </nav>

            <section class="main-content grad-pink-cream">
                  <div class="mx-5">
                        <h1><strong>Manage Order</strong></h1>

                        <br><br>
                        <a href=""><button class="btn btn-warning">Add Order</button></a>
                        <br><br><br>
                        <table style="width: 100%;">
                              <tr>
                                    <th>S.N.</th>
                                    <th>Customer Name</th>
                                    <th>Email/Phone No.</th>
                                    <th>Address</th>
                                    <th>Food</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                              </tr>
                              <?php for ($i=0; $i < 5; $i++) : ?>
                              <tr>
                                    <td>1. </td>
                                    <td>Ian</td>
                                    <td>Ramirez</td>
                                    <td>Ramirez</td>
                                    <td>Ramirez</td>
                                    <td>Ramirez</td>
                                    <td>Ramirez</td>
                                    <td>Ramirez</td>
                                    <td>Ramirez</td>
                                    <td>
                                          <a href="" class="btn btn-secondary">Update</a>
                                          <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                              </tr>
                              <?php endfor ?>
                        </table>
                  </div>
            </section>

            <?php include './section_template/footer_footer.php' ?>

            <?php include_once './main_template/script.php'; ?>
      </section>
</body>
</html>