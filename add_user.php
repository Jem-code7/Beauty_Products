<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-admin-checker.php';

      $use = (isset($_GET['use']))? $_GET['use']:"";

      if (isset($_POST['submit'])){
            $username = ucfirst($_POST['username']);
            $first_name = ucfirst($_POST['first_name']);
            $last_name = ucfirst($_POST['last_name']);
            $gender = $_POST['gender'];
            $birth_date = $_POST['birth_date'];
            $address = $_POST['address'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $password = $_POST['password'];           // soon to be transfered to hash code
            $type = $_POST['type'];
            $id =  $_GET['id'];

            /*
            $image_name = $_FILES['profile_image']['name'];
            $image_upload = false;

            if($image_name){
                  
                  $source_path = $_FILES['profile_image']['tmp_name'];
                  $image_name="Profile Image - ".rand().".".end(explode(".", $image_name));
                  $destination_path = './img/Profiles/'.$image_name;

                  if(!move_uploaded_file($source_path, $destination_path))
                  {
                        $_SESSION['profile_upload']="<div class='error'>Fail to Upload Image</div>";
                  }

                  $image_upload = true;
            }
            */
            
            $sql = (($use == "Add")? "INSERT INTO" : "UPDATE")
                  ." tbl_user SET last_name='$last_name', first_name='$first_name', username='$username', gender='$gender', birth_date='$birth_date', password='$password', address='$address', phone_number='$number', email='$email', type='$type' "
                  //.(($image_upload)? ", image_name='$image_name'" : "")
                  .(($use == "Add")? "": "WHERE user_id='$id'");

            $_SESSION['result']=(mysqli_query($db->con, $sql))? 
                  "<div class='success'>User ".$use." Successfully</div>":
                  "<div class='error'>Fail to ".$use." User</div>";
            header("location:".$homeurl.'admin_user_management_page.php?'.$sql);
      }

?>

<body>
<?php include_once './section_template/admin_header.php'?>
      
      <section class="grad-pink-cream pb-5">
            <div class="mx-5 pt-3">
                  <form action="" method="post"  enctype="multipart/form-data" class="container">
                        <h1><strong><?php echo $use." User"?></strong></h1>
                        <?php
                              $id = null;

                              if ($use == "Update")
                              {
                                    $id = $_GET['id'];
                                    $rows = mysqli_fetch_assoc(mysqli_query($db->con,"SELECT * FROM tbl_user WHERE user_id=$id"));
                              }
                        ?>
                        <div class="shadow-lg p-3 mb-5 bg-white rounded table">
                              <table class="tbl w-100">
                                    <!-- <tr>
                                          <td><img src="<?php echo (isset($rows['file_name']))? 
                                                './img/Profiles/'.$rows['file_name']:
                                                './img/Placeholders/No_Image_Placeholderpng.png';?>" 
                                                alt="" style="width: 200px; height: 200px"></td>
                                          <td class="align-bottom">
                                                <h5>Upload Image: </h5>
                                                <input type="file" name="profile_image">
                                          </td>
                                    </tr> -->
                                    <tr>
                                          <td style="width: 10%"><h5>Username:</h5></td>
                                          <td><input style="width: 100%" type="text" name="username" placeholder="ex. Dela Cruz, Juan" value="<?php if($use=="Update") echo $rows['username']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td style="width: 10%"><h5>Last Name:</h5></td>
                                          <td><input style="width: 100%" type="text" name="last_name" placeholder="ex. Dela Cruz, Juan" value="<?php if($use=="Update") echo $rows['last_name']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td style="width: 10%"><h5>First Name:</h5></td>
                                          <td><input style="width: 100%" type="text" name="first_name" placeholder="ex. Dela Cruz, Juan" value="<?php if($use=="Update") echo $rows['first_name']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td><h5>Gender:</h5></td>
                                          <td>
                                                <!-- set echo checked -->
                                                <input type="radio" name="gender" value=1 <?php if($use=='Update')if($rows['gender']) echo 'checked'?> required>Male
                                                <input class="ml-5" type="radio" name="gender" value=0 <?php if($use=='Update')if(!$rows['gender']) echo 'checked'?>>Female
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><h5>Birth Date:</h5></td>
                                          <td><input style="width: 100%" type="date" name="birth_date" value="<?php if($use=="Update") echo $rows['birth_date']?>"></td>
                                    </tr>
                                    <tr>
                                          <td><h5>Address:</h5></td>
                                          <td><input style="width: 100%" type="text" name="address" placeholder="ex. ABC" value="<?php if($use=="Update") echo $rows['address']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td><h5>Email:</h5></td>
                                          <td><input style="width: 100%" type="email" name="email" placeholder="ex. ABC" value="<?php if($use=="Update") echo $rows['email']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td><h5>Number:</h5></td>
                                          <td><input style="width: 100%" type="text" name="number" placeholder="ex. 09xxxxxxxx" value="<?php if($use=="Update") echo $rows['phone_number']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td><h5>Type:</h5></td>
                                          <td>
                                                <!-- set echo checked -->
                                                <input type="radio" name="type" value=1 <?php if($use=='Update')if($rows['type']) echo 'checked'?> required>Distributor
                                                <input class="ml-5" type="radio" name="type" value=0 <?php if($use=='Update')if(!$rows['type']) echo 'checked'?>>Re-Seller
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><h5>Password:</h5></td>
                                          <td><input style="width: 100%" type="text" name="password" placeholder="" value="<?php if($use=="Update") echo $rows['password']?>" required></td>
                                    </tr>
                                    <br>
                                    <tr>
                                          <td></td>
                                          <td colspan="2" class="text-right">
                                                <a href="./admin_user_management_page.php"><input value="Cancel" class="btn-secondary rounded" style="width: 60px"></a>
                                                <input type="submit" name="submit" value="Submit" class="btn-primary rounded">
                                          </td>
                                    </tr>
                              </table>
                        </div>
                  </form>
            </div>
      </section>
      
      <?php include './section_template/footer_footer.php' ?>
      </main>

      <?php include_once './main_template/script.php'; ?>
    
</body>
</html>
