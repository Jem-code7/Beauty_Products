<?php include_once './main_template/metadata.php' ?>

<body>
    <?php include './section_template/heading_header.php' ?>

    <section class="main-content grad-pink-cream pb-5">

        <div class="container-fluid justify-content-center">
            <div class="row px-5 mx-5 py-3">
                <div class="col-lg-3 border mr-3 rounded text-center shadow-lg mb-5">
                    <img src="" alt="" style="width: 150px; height: 150px" class="p-2 m-4 rounded-circle shadow">

                    <div class="row justify-content-center mb-3">
                        <h3 class="">User name</h3>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <a href="" class="rounded-pill border text-center btn btn-primary w-50">My Account</a>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <a href="" class="rounded-pill border text-center btn btn-primary w-50">Profile</a>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <a href="" class="rounded-pill border text-center btn btn-primary w-50">My Purchase</a>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <a href="" class="rounded-pill border text-center btn btn-primary w-50">Notification</a>
                    </div>
                    <div class="row justify-content-center mt-5 mb-5 pb-5">
                        <a href="./logout.php" class="rounded-pill border text-center btn btn-danger w-50">Log Out</a>
                    </div>
                </div>

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
                            <h3>Username</h3>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h5>Name: </h5>
                            </div>
                            <div class="col">
                                <p class="border border-dark p-3 w-100"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h5>Phone Number: </h5>
                            </div>
                            <div class="col">
                                <p class="border border-dark p-3 w-100"></p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-3">
                                <h5>Gender: </h5>
                            </div>
                            <div class="col-lg-3">
                                <p>Gender</p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Birthdate: </h5>
                            </div>
                            <div class="col-lg-3">
                                <p>Birthdate</p>
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