<?php 
    include_once './main_template/user_metadata.php'; 
    include_once './main_template/login-admin-checker.php';
?>


<body class="grad-pink-cream">
    <?php include './main_template/user_header.php';
        $id=$_SESSION['user_id'];
        $i = 'user_id';
        $rows = mysqli_fetch_assoc(mysqli_query($db->con,"SELECT * FROM tbl_user WHERE $i='$id'"));
         
    ?>

    <section class="main-content pb-5" style="min-height:100vh">

        <div class="container-fluid justify-content-center">
            <div class="row px-5 mx-5 py-3">
                <?php include '../section_template/side_panel_user_account.php' ?>

                <div class="col border rounded shadow-lg">
                    <div class="container m-4">
                        <div class="row">
                            <h3><strong>Cart</strong></h3>
                        </div>
                        <div class="row pl-3 border-bottom border-dark w-50">
                            <h5>Manage Your Cart</h5>
                        </div>
                        <section class="cart py-3">
                            <div class="row">
                                <div class="col-sm-9">
                                    <?php 
                                        foreach($_cart->getCart($_SESSION['user_id']) as $data)
                                        {
                                    ?>
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-3">
                                                    <img src="<?php echo ($data['image'] != '')? "../img/Product_Image/".$data['image'] : "../img/Placeholders/No_Image_Placeholderpng.png"?>" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-sm-7">
                                                    <h5><?php echo $data['name'] ?></h5>
                                                    <small><?php echo $data['code'] ?></small>
                                                    <div class="qty d-flex pt-2">
                                                        <div class="d-flex">
                                                                <form method="post">
                                                                    <input type="hidden" name="item_id" value="">
                                                                    <input type="hidden" name="item_count" class="qty-input" data-id="pro-">
                                                                    
                                                                    <button type="submit" name="alter-count" class="qty-up border clr-light-bg" data-id="pro-" title="arrow-up"><i class="fas fa-angle-up"></i></button>
                                                                    <input type="number" class="qty-input border px-2 w-50" data-id="pro-" disabled value="<?php echo $data['quantity'] ?>" placeholder="1">
                                                                    <button type="submit" name="alter-count" class="qty-down border clr-light-bg" data-id="pro-" title="arrow-down"><i class="fas fa-angle-down"></i></button>
                                                                </form>

                                                                <form method="post">
                                                                    <input type="hidden" name="item_id" value="">
                                                                    <button type="submit"  name="delete-from-cart" class="btn text-danger px-3"> Delete</button>
                                                                </form>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-sm-2 text-right u-price">
                                                <div>
                                                    <p><small>Product Price: </small> $<span class="price" data-id="pro-"></span></p>
                                                    <br><br>
                                                    <p class="text-danger t-price"> </p>
                                                    <p class="text-danger">$ <input type="text" class="w-50 text-right product-price " data-id="pro-" disabled value="" placeholder="1"></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>

                                </div>

                                <div class="col-sm-2 sub-total text-center my-2 border m-4 p-3">
                                        <br><br>
                                        <h4>Subtotal </h4>
                                        <h5>(<span class="item-count"></span> type of item) </h5> 
                                        <h3><span class="subtotal text-warning">$ </span> </h3>
                                        <button type="submit" class="btn btn-warning mt-3">Check out</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php include './main_template/user_footer.php' ?>

    <?php include_once './main_template/user_script.php'; ?>
    
</body>
</html> 