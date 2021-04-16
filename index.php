<?php
  session_start();
?>
<!dOCTYPE html>
<html>
  <?php require_once('header.php');?>
<body>
  <div class="page">
    <!-- Navbar -->
    <?php require_once('header-navbar.php'); ?>
    <!-- Carousel -->
    <?php require_once('./content/SEsport/carousel-SEsport.php'); ?> 
    <section class="dashboard-counts">
      <div class="container-fluid">
        <div class="row">
          <!--Main screen-->
          <?php require_once("./content/SEsport/SEsport.php"); ?> 
          <!--End the main screen-->
        </div>
      </div>
    </section>
  </div>
  <?php require_once('footer.php'); ?>
</body>
</html>