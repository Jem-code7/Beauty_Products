<?php include_once './main_template/metadata.php' ?>

<body>
    <?php include './section_template/heading_header.php';
        $id=$_SESSION['user_id'];
        $i = 'user_id';
        $rows = mysqli_fetch_assoc(mysqli_query($db->con,"SELECT * FROM tbl_user WHERE $i='$id'"));
        './section_template/heading_header.php' 
    ?>

    <section class="main-content grad-pink-cream pb-5">

        <div class="container-fluid justify-content-center">
            <div class="row px-5 mx-5 py-3">
                <?php include './section_template/side_panel_user_account.php' ?>

                <div class="col border rounded shadow-lg">
                    <div class="container m-4">
                        <div class="row">
                            <h3><strong>My Profile</strong></h3>
                        </div>
                        <div class="row pl-3 border-bottom border-dark w-50">
                            <h5>Manage Protect Your Account</h5>
                        </div>
                        <br>
                        <div class="row">
                            <h3><?php echo $_SESSION['user']?></h3>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h5>Name: </h5>
                            </div>
                            <div class="col">
                                <p class="border border-dark p-3 w-100"><?php echo $rows['first_name'].' '.$rows['last_name']?></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h5>Phone Number: </h5>
                            </div>
                            <div class="col">
                                <p class="border border-dark p-3 w-100"><?php echo $rows['phone_number']?></p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h5>Gender: </h5>
                            </div>
                            <div class="col-lg-3">
                                <p><?php echo ($rows['gender'])? "Male" : "Female"?></p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Birthdate: </h5>
                            </div>
                            <div class="col-lg-3">
                                <p><?php echo $rows['birth_date']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include './section_template/footer_footer.php' ?>

    <?php include_once './main_template/script.php'; ?>
    
</body>
</html> 