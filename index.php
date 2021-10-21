<?php include_once './main_template/metadata.php' ?>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/heading.css">
    <link rel="stylesheet" href="./css/banner.css">
</head>

<body>
    <?php include './section_template/heading.php' ?>

    <main class="main-site">
        <?php include './section_template/w_banner.php'?>

       <section class="brands-area">
           <h3>Brands</h3>
           <!-- <div class="container-fluid py-5 border border-secondary"> -->
               <div class="owl-carousel owl-theme">
                   <div class="item">
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
               </div>
           </div>
       </section>
    </main>

    <!-- Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Owl Carousel JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script src="./js/owl-carousel.js"></script>
    
</body>
</html>
