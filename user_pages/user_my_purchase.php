<?php include_once './main_template/metadata.php' ?>

<body>
    <?php include './section_template/heading_header.php';
        $id=$_SESSION['user_id'];
        $i = 'user_id';
        $rows = mysqli_fetch_assoc(mysqli_query($db->con,"SELECT * FROM tbl_user WHERE $i='$id'"));
        './section_template/heading_header.php' 
    ?>

    <section class="main-content grad-pink-cream pb-5"style="min-height:100vh">

        <div class="container-fluid justify-content-center">
            <div class="row px-5 mx-5 py-3">
                <?php include './section_template/side_panel_user_account.php' ?>

                <div class="col border rounded shadow-lg">
                    <div class="container m-4">
                        <div class="row pl-3 border-bottom border-dark w-50">
                            <h3><strong>History</strong></h3>
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