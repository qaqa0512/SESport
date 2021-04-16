<div class="jumbotron col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h2 class="h2-jumbotron neon">SE SPORT: ĐỒ THỂ THAO NAM CHÍNH HÃNG CAO CẤP</h2>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="row main-section-1">
    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-section">
      <h2>Đồ bóng đá</h2><hr>
      <p>Nơi duy nhất mà bạn có thể mua những bộ áo đấu clb chất lượng được bảo hành lên tới 12 tháng. Sản phẩm làm từ vật liệu an toàn cho người sử dụng – nhiều mẫu mã đẹp.</p> 
      <button type="button" class="btn btn-info btn-screen1" data-toggle="modal" data-target="#demo3">Xem áo đấu</button> 
      <?php include __DIR__ . "/modalclothes.php"; ?>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
      <div class="card img-mainscreen">
        <img class="" style="height: 400px !important" src="/se-sport/public/img/mainscreen1.jpg" alt="clothes">
      </div>
    </div>
  </div> 
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="row main-section-2">
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
      <div class="card img-mainscreen">
        <img class="" style="height: 400px !important" src="/se-sport/public/img/mainscreen4.jpg" alt="clothes">
      </div>
    </div>
    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-section">
      <h2>Giày bóng đá</h2><hr>
      <p>Cùng với nhiều kiểu mẫu giày đẹp, chất lượng giúp cho những bước chạy trên sân của bạn trở nên thoải mái hơn bao giờ hết Và đồng thời thể hiện lên được sự chuyên nghiệp cũng như là sự nhiệt huyết mỗi khi ra sân.</p>
      <?php
        if($conn)
        {
          mysqli_select_db("sesport",$conn);
          $sql="Select madanhmuc from sanpham where madanhmuc=4";
          $madm=mysqli_query($sql,$conn);
          if(mysqli_num_rows($madm)>0)
          {
            if($sanpham=mysqli_fetch_row($madm))
            {
              $madanhmuc=$sanpham[0];
              echo '<button type="button" class="btn btn-info btn-screen2"><a class="shoe-button" href="/se-sport/content/SEsport-shoes/index.php?madm4='.$madanhmuc.'">Mẫu giày đẹp</a></button>';
            }
          }
        }	
      ?>     
    </div>
  </div> 
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="row main-section-3">
    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-section">
      <h2>Phụ kiện bóng đá</h2><hr>
      <p>Ngoài trang phục bắt mắt đi cùng đôi giày chất lượng, các phụ kiện bảo vệ sẽ giúp cơ thể giảm thiểu những chấn thương và thỏa sức thể hiện bản thân trên sân cỏ.</p>
      <button type="button" class="btn btn-info btn-screen3">Xem phụ kiện</button>     
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
      <div class="card img-mainscreen">
        <img class="" style="height: 400px !important" src="/se-sport/public/img/mainscreen3.jpg" alt="clothes">
      </div>
    </div>
  </div> 
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="row main-section-4">
    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-section">
      <span style="font-weight: 700 !important; font-size: 50px !important">SIGN UP FOR NEWS & GET 15% OFF</span>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="margin: auto !important">
      <form class="form-inline">
        <div class="input-group" style="width: 400px !important">
          <input class="form-control mr-sm-2" type="search" placeholder="Your Email..." aria-label="Search" style="font-style: italic !important; margin-right: 0px !important">
          <div class="input-group-append">
            <button class="btn btn-outline-success my-2 my-sm-0 icon-mainscreen4" type="submit"><i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div> 
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="row" style="background: #e9e9e9;padding-bottom: 20px;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin: 30px 0px 30px 0px;">
      <h3 class="font-bold" style="text-align: center; color: rgb(32, 179, 127) !important;">LIÊN HỆ</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h4>SE SPORT - Đồ thể thao nam chính hãng</h4><br>
          <p>475A Điện Biên Phủ, P.25, Q.Bình Thạnh, TP.HCM</p>
          <p>Website: www.sesport.com</p>
          <p>Email: leosnart1306@gmail.com</p>
          <p>Hotline: 0397557676</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.120335130718!2d106.71240001460608!3d10.802094592304101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2sHutech%20University!5e0!3m2!1sen!2s!4v1574414180075!5m2!1sen!2s" 
                  width="100%" 
                  height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 25px;">
          <div class="row">
            <div  class="form-group">
              <label class="col-form-label font-form">Họ Tên <span class="label-required">*</span></label><span id="errName" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
              <div class="">
                  <input value=""  id="txtFullName" name="txtFullName" type="text" class="form-control" style="width: 560px;">
              </div>
              <span id="" class="err alert-checkout"></span>
            </div>
          </div>
          <div class="row">
            <div  class="form-group">
              <label class="col-form-label font-form">Điện thoại <span class="label-required">*</span></label><span id="errName" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
              <div class="">
                  <input value=""  id="txtPhone" name="txtPhone" type="text" class="form-control" style="width: 560px;">
              </div>
              <span id="" class="err alert-checkout"></span>
            </div>
          </div>
          <div class="row">
            <div  class="form-group">
              <label class="col-form-label font-form">Email <span class="label-required">*</span></label><span id="errName" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
              <div class="">
                  <input value=""  id="txtEmail" name="txtEmail" type="text" class="form-control" style="width: 560px;">
              </div>
              <span id="" class="err alert-checkout"></span>
            </div>
          </div>
          <div class="row">
            <div  class="form-group">
              <label class="col-form-label font-form">Nội dung </label><span id="errName" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
              <div class="">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="width: 560px;"></textarea>
              </div>
              <span id="" class="err alert-checkout"></span>
            </div>
          </div>
          <div class="row" style="float: right;">
            <button type="button" class="btn btn-success" style="width: 110px;">GỬI</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




