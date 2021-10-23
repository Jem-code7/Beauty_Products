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
                        <div class="item py-2">
                            <div class="products">
                                <a href=""><img src="./img/brand- brilliant.png" alt="product" class="img-fluid"></a>
                                <h6>brand1</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products">
                                <a href=""><img src="./img/brand-abonne.jfif" alt="" class="img-fluid"></a>
                                <h6>brand2</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="products">
                                <a href=""><img src="./img/brand-skinmagical.jfif" alt="" class="img-fluid"></a>
                                <h6>brand3</h6>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
               </div>
           </div>
       </section>

       <section class="products-area">
           <div class="container py-5">
               <div class="grid">
                    <?php for ($i=0; $i < 100; $i++) : ?>
                        <div class="grid-item border m-3 p-2">
                            <div class="item py-2">
                            <div class="products">
                                <a href=""><img src="./img/brand-skinmagical.jfif" alt="" class="img-fluid"></a>
                                <h6>brand3</h6>
                            </div>
                            </div>
                        </div>
                    <?php endfor ?>
               </div>
           </div>
       </section>
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
