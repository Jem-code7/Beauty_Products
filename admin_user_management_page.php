<?php
      include_once "./main_template/metadata.php";
?>
<body>
      <?php include_once './section_template/admin_header.php'?>

      <section class="main-content grad-pink-cream">
            <div class="mx-5">
                  <h1><strong>Manage User</strong></h1>

                  <br><br>
                  <a href=""><button class="btn btn-warning">Add User</button></a>
                  <br><br><br>
                  <table style="width: 100%;">
                        <tr>
                              <th>S.N.</th>
                              <th>Name</th>
                              <th>Gender</th>
                              <th>Birth Date</th>
                              <th>Age</th>
                              <th>Address</th>
                              <th>Number</th>
                              <th>Date</th>
                              <th>Actions</th>
                        </tr>
                        <?php for ($i=0; $i < 5; $i++) : ?>
                        <tr>
                              <td><?php echo ($i+1)?> </td>
                              <td>Test</td>
                              <td>Test</td>
                              <td>Test</td>
                              <td>Test</td>
                              <td>Test</td>
                              <td>Test</td>
                              <td>Test</td>
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
</body>
</html>