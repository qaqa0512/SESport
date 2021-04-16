<?php
  session_start();
?>
<!dOCTYPE html>
<html>
  <?php include __DIR__ . "/../../header.php"; ?>
<body>
  <div class="page">
    <!-- Navbar -->
    <?php include __DIR__ . "/../../header-navbar.php"; ?>
    <section class="dashboard-counts">
      <div class="container">
        <div class="row">
          <!--Main screen-->
          <?php include __DIR__ . "./checkout.php"; ?> 
          <!--End the main screen-->
        </div>
      </div>
    </section>
  </div>
  <?php include __DIR__ . "/../../footer.php"; ?>
</body>
</html>