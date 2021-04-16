<?php
  include('/../../connect.php');
?>
<div class="modal fade" id="demo3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5) !important">
  <div class="modal-dialog opacity-animate3 modal-lg" style="max-width: 77% !important">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="card bg-dark text-white">
                <img src="/se-sport/public/img/modalclothesclb.jpg" class="card-img modalclothes-img" alt="...">
                <div class="card-body card-img-overlay">
                  <div class="modalclothes-text">
                    <h5 class="card-title">ÁO BÓNG ĐÁ CLB</h5>
                    <p class="card-text">Bạn có thể chọn những mẫu áo đội tuyển mạnh, áo bóng đá - áo đá banh các câu lạc bộ mạnh hàng đầu hiện nay.</p>
                  </div>
                </div>
              </div>
              <?php
                if($conn)
                {
                  mysqli_select_db("sesport",$conn);
                  $sql="Select madanhmuc from sanpham where madanhmuc=2";
                  $madm=mysqli_query($sql,$conn);
                  if(mysqli_num_rows($madm)>0)
                  {
                    if($sanpham=mysqli_fetch_row($madm))
                    {
                      $madanhmuc=$sanpham[0];
                      echo '<button type="button" class="btn btn-danger modalclothes-button"><a class="modalclothes-a" href="/se-sport/content/SEsport-clothes-clb/index.php?madm2='.$madanhmuc.'">Câu lạc bộ</a></button>';
                    }
                  }
                }	
              ?>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="card bg-dark text-white">
                <img src="/se-sport/public/img/modalclothesnation.jpg" class="card-img modalclothes-img" alt="...">
                <div class="card-img-overlay">
                  <div class="modalclothes-text">
                    <h5 class="card-title">ÁO ĐỘI TUYỂN</h5>
                    <p class="card-text">Những đội tuyển quốc gia hàng đầu như: Anh, Pháp, Đức, Bỉ, Tây Ban Nha, Bồ Đào Nha, Brazil, Argentina...</p>
                  </div>
                </div>
              </div>
              <?php
                if($conn)
                {
                  mysqli_select_db("sesport",$conn);
                  $sql="Select madanhmuc from sanpham where madanhmuc=3";
                  $madm=mysqli_query($sql,$conn);
                  if(mysqli_num_rows($madm)>0)
                  {
                    if($sanpham=mysqli_fetch_row($madm))
                    {
                      $madanhmuc=$sanpham[0];
                      echo '<button type="button" class="btn btn-success modalclothes-button"><a class="modalclothes-a" href="/se-sport/content/SEsport-clothes-nation/index.php?madm3='.$madanhmuc.'">Đội tuyển</a></button>';
                    }
                  }
                }	
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>