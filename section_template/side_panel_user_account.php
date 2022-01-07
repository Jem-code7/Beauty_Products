            <div class="col-lg-3 border mr-3 rounded text-center shadow-lg mb-5">
                  <img src="<?php echo ($rows['file_name'] != "")?
                                                '../img/Profiles/'.$_SESSION['file_name']=$rows['file_name']:
                                                "https://avatars.dicebear.com/api/initials/".preg_replace('/\s+/', '_', $rows['first_name']).".svg"?>"
                                                alt="" style="width: 150px; height: 150px" class="p-2 m-4 rounded-circle shadow">

                  <div class="row justify-content-center mb-3">
                  <h3 class=""><?php echo $_SESSION['user']?></h3>
                  </div>
                  <div class="row justify-content-center mt-3">
                  <a href="./user_home.php" class="rounded-pill border text-center btn btn-primary w-50">My Account</a>
                  </div>
                  <div class="row justify-content-center mt-3">
                  <a href="./user_cart.php" class="rounded-pill border text-center btn btn-primary w-50">Cart</a>
                  </div>
                  <div class="row justify-content-center mt-3">
                  <a href="./user_my_purchase.php" class="rounded-pill border text-center btn btn-primary w-50">My Purchase</a>
                  </div>
                  <div class="row justify-content-center mt-3">
                  <a href="./user_notifications.php" class="rounded-pill border text-center btn btn-primary w-50">Notification</a>
                  </div>
                  <div class="row justify-content-center mt-5 mb-5 pb-5">
                  <a href="./../logout.php" class="rounded-pill border text-center btn btn-danger w-50">Log Out</a>
                  </div>
            </div>