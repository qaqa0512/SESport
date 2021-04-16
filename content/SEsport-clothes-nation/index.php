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
    <!-- Carousel -->
    <?php include __DIR__ . "/carousel-clothes-nation.php"; ?> 
    <section class="dashboard-counts">
      <div class="container-fluid">
        <div class="row">
          <!--Main screen-->
          <?php include __DIR__ . "./SEsport-clothes-nation.php"; ?> 
          <!--End the main screen-->
        </div>
      </div>
    </section>
  </div>
  <?php include __DIR__ . "/../../footer.php"; ?>
</body>
</html>