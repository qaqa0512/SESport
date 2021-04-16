<?php
  include('connect.php');
?>
<header class="header">  
  <nav  id="header" class="navbar navbar-expand-lg navbar-light bg-light fixed-top nav-header">
    <div id="header-container" class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 login-header">
            <?php 
              if (isset($_SESSION['user'])) {
                echo '<span class="login-user alert-err" href="#">&nbsp;&nbsp;Xin chào '.$_SESSION['user'].' !</span>';
                if(isset($_SESSION["chucvutv"]) && $_SESSION["chucvutv"]==1)
                {
                  echo "<a href='#' class='login-header-text'>| &nbsp;VÀO TRANG QUẢN TRỊ&nbsp&nbsp|</a>";
                }
                echo "<a href='/login/index.php?logout=1' class='login-header-text'>| &nbsp;ĐĂNG XUẤT&nbsp</a>";
              } else {
                echo '<a class="login-header-text" href="/se-sport/login/index.php">| &nbsp;ĐĂNG NHẬP <i class="fa fa-fw fa-user"></i></a>';
              } 
            ?>
						<a class="login-header-text" href="#">| &nbsp;ĐĂNG KÝ &nbsp;</a>
            <span class="login-header-n">NGÔN NGỮ  &nbsp;
              <img class="login-flag" src="https://adl-foundation.adidas.com/prod/v18.1.0/assets/flags/vn.svg" alt="vn flag" title="" aria-label="vn flag">
              <img class="login-flag" src="https://adl-foundation.adidas.com/prod/v18.1.0/assets/flags/us.svg" alt="us flag" title="" aria-label="us flag">
            &nbsp;&nbsp;
            </span>
          </div>
        </div>
        <!-- <hr style="margin: 2px 0px 0px 0px !important"> -->
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="top: -10px !important;">
            <a href="/se-sport/index.php">
                <img class="logo" src="/se-sport/public/img/logo1.png"  alt="SE Sport">
            </a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 font-header">
            <div id="navigation-bar" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="aoBongDa" role="button" aria-haspopup="true" aria-expanded="false">
                    ĐỒ BÓNG ĐÁ
                  </a>
                  <!-- <div class="dropdown-menu m-0 box-header" aria-labelledby="aoBongDa">
                    <?php
                      if($conn)
                      {
                        mysqli_select_db("sesport",$conn);
                        $sql = 'SELECT madanhmuc FROM sanpham WHERE madanhmuc=2';
                        $madm = mysqli_query($sql,$conn);
                        if(mysqli_num_rows($madm)>0)
                        {
                          if($sanpham=mysqli_fetch_row($madm))
                          {
                            $madanhmuc=$sanpham[0];
                            echo '<a class="dropdown-item font-opt" href="/se-sport/content/SEsport-clothes-clb/index.php?madm2='.$madanhmuc.'">ÁO BÓNG ĐÁ CLB</a>';
                          }
                        }
                      }	
                    ?>
                    <div class="dropdown-divider"></div>
                    <?php
                      if($conn)
                      {
                        // mysql_query("Set names utf8");
                        mysqli_select_db("sesport",$conn);
                        $sql='SELECT madanhmuc FROM sanpham WHERE madanhmuc=3';
                        $madm=mysqli_query($sql,$conn);
                        if(mysqli_num_rows($madm)>0)
                        {
                          if($sanpham=mysqli_fetch_row($madm))
                          {
                            $madanhmuc=$sanpham[0];
                            echo '<a class="dropdown-item font-opt" href="/se-sport/content/SEsport-clothes-nation/index.php?madm3='.$madanhmuc.'">ÁO ĐỘI TUYỂN</a>';
                          }
                        }
                      }	
                    ?>
                  </div>
                </li>
                &nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  
                </li> -->
                <div class="dropdown-menu m-0 box-header" aria-labelledby="phuKien">
                    <a class="dropdown-item font-opt" href="/se-sport/content/SEsport-clothes-clb/index.php">ÁO BÓNG ĐÁ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-opt" href="/se-sport/content/SEsport-clothes-nation/index.php">ÁO ĐỘI TUYỂN</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-opt" href="/se-sport/content/SEsport-shoes/index.php">GIÀY BÓNG ĐÁ</a>
                  </div>
                &nbsp;&nbsp;&nbsp;
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="phuKien" role="button" aria-haspopup="true" aria-expanded="false">
                    PHỤ KIỆN
                  </a>
                  <div class="dropdown-menu m-0 box-header" aria-labelledby="phuKien">
                    <a class="dropdown-item font-opt" href="#">GĂNG TAY</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-opt" href="#">MŨ THỂ THAO</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-opt" href="#">BĂNG BẢO HỘ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item font-opt" href="#">VỚ THỂ THAO</a>
                  </div>
                </li>
              </ul>
            </div>
          </div> 
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 search-header">
            <form class="form-inline">
              <div class="input-group" style="width: 320px !important">
                <input class="form-control mr-sm-2 input-header font-opt" type="search" placeholder="Tìm kiếm..." aria-label="Search" style="font-style: italic !important">
                <div class="input-group-append">
                  <button class="btn btn-outline-success my-2 my-sm-0 icon-header" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 cart-header">
            <img class="" src="/se-sport/public/img/shoppingcart.png" alt="shopping cart">
            <span class="badge badge-warning" id="lblCartCount">13</span>
          </div>
        </div> 
      </div>
    </div> 
  </nav>
</header>
<script>
  $(document).ready(function() {
    $(window).scroll(function() {
      $(".navbar").addClass("trans-pos");
      if ($(window).scrollTop()) {
        $(".navbar").addClass("trans-nav");
      } else {
        $(".navbar").removeClass("trans-pos");
        $(".navbar").removeClass("trans-nav");
      }
    }); 
  });
</script>