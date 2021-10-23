<?php include_once './main_template/metadata.php' ?>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/heading.css">
    <link rel="stylesheet" href="./css/banner.css">
    <link rel="stylesheet" href="./css/brand.css">
</head>

<body>
    <?php include './section_template/heading.php' ?>

    <main class="main-site">
        <?php include './section_template/w_banner.php'?>

       <section class="brands-area px-5">
           <h3>Brands</h3>
           <div class="container-fluid py-3 border-top border-bottom border-secondary">
               <div class="px-2">
                <div class="owl-carousel owl-theme">
                    <?php for ($i=0; $i < 5; $i++) :?>
                        <div class="item">
                            <div class="products text-center">
                                <a href=""><img src="./img/brand- brilliant.png" alt="product" class="rounded mx-auto d-block"></a>
                                <h6>brand1</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products text-center">
                                <a href=""><img src="./img/brand-abonne.jfif" alt="" class="rounded mx-auto d-block"></a>
                                <h6>brand2</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products text-center">
                                <a href=""><img src="./img/brand-skinmagical.jfif" alt="" class="rounded mx-auto d-block"></a>
                                <h6>brand3</h6>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
               </div>
           </div>
       </section>

       <section class="products-area">
           <div class="container-fluid py-5 w-75">
               <h3>Most Buy</h3>
               <div class="grid">
                    <?php for ($i=0; $i < 10; $i++) : ?>
                        <div class="grid-item border m-2 p-2 text-center">
                            <div class="item py-2">
                                <div class="products">
                                    <a href=""><img src="./img/brand-skinmagical.jfif" alt="" class="img-fluid"></a>
                                    <h6>brand3</h6>
                                    <form>
                                        <button type="submit" class="btn btn-warning">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
               </div>
           </div>
       </section>

       <footer class="footer py-5 black-bg">
           <div class="container-fluid w-75">
               <div class="row">
                   <div class="col-lg-5 col-12 text-white">
                       <h4>Shop Name</h4>
                       <a class="navbar-brand" href="#"><img src="img/logo-removebg-preview.png" class="img-fluid"></a>
                   </div>
                   <div class="col-lg-2 col-12 text-white">
                       <h4>Sponsors</h4>
                       <div class="d-flex flex-column flex-wrap anchors">
                                <a href="#">About Us</a>
                                <a href="#">Delivery Information</a>
                                <a href="#">Privacy Policy</a>
                                <a href="#">Term and Conditions</a>
                            </div>
                   </div>
                   <div class="col-lg-2 col-12 text-white">
                        <h4>Information</h4>
                        <div class="d-flex flex-column flex-wrap anchors">
                            <a href="#">About Us</a>
                            <a href="#">Delivery Information</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Term and Conditions</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12 text-white">
                        <h4>Account</h4>
                        <div class="d-flex flex-column flex-wrap anchors">
                            <a href="#">My Account</a>
                            <a href="#">Order History</a>
                            <a href="#">Wish List</a>
                            <a href="#">Notifications</a>
                        </div>
                    </div>
               </div>
           </div>
       </footer>
    </main>

    <!-- Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Owl Carousel JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!-- Isotope.jQuery Plugin CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

    <script src="./js/owl-carousel.js"></script>
    
</body>
</html>
