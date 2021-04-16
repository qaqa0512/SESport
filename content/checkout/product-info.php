<?php
  include('/../../connect.php');
?>
<form>
  <?php
    if($conn)
    {
      mysqli_select_db("sesport",$conn);
      $masanpham = $_GET['muangaymasp'];
      if($masanpham[0]) 
      $sql="Select *,FORMAT(gia,3) as giamoi from sanpham where masp='$masanpham'";
      $buyproduct=mysqli_query($sql,$conn);
      if(mysqli_num_rows($buyproduct)>0)
      {
        while($sanpham=mysqli_fetch_row($buyproduct))
        {
          $masanpham=$sanpham[0];
          $madanhmuc=$sanpham[1];
          $tensanpham=$sanpham[2];
          $size= $sanpham[3];
          $mota=$sanpham[4];
          $giacu=$sanpham[5];
          $gia=$sanpham[6];
          $hinh="/SEsport/public/img/".$sanpham[7];
          $giamoi=$sanpham[9];
          echo '
                <div class="card checkout-order-size">
                <h3 class="card-header header-checkout">Sản phẩm của bạn</h3>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="row">
                          <div  class="card card-product mb-3">
                            <a href="#"><img src="'.$hinh.'" class="card-img-top img-product" alt="galaxy"></a>
                            <div class="card-body" style="padding-bottom: 0px !important;">                     
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout" style="font-weight: 400 !important;">Tên sản phẩm:</label>
                                  </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout">'.$tensanpham.'</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout" style="font-weight: 400 !important;">Size:</label>
                                  </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <select class="form-control input-checkout" style="top: 3px !important;">
                                      <option value="M">'.$size="M".'</option>
                                      <option value="L">'.$size="L".'</option>
                                      <option value="XL">'.$size="XL".'</option>
                                      <option value="XL">'.$size="XXL".'</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout" style="font-weight: 400 !important;">Đơn giá:</label>
                                  </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout" id="txtDongia">'.$giamoi.' <span class="">VND</span></label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout" style="font-weight: 400 !important;">Số lượng:</label>
                                  </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <div class="input-group" style="top: 3px !important;">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <span class="fa fa-minus"></span>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[1]" id="txtSoluong"  onchange="TinhThanhTien('.$giamoi.')" class="form-control input-number input-checkout" value="1" min="1" max="10">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                <span class="fa fa-plus"></span>
                                            </button>
                                        </span>
                                    </div>
                                  </div>
                                </div>
                                <hr style="background-color: black !important;">
                                <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout" style="font-weight: 400 !important;">Thành tiền:</label>
                                  </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pa-l">
                                    <label class="col-form-label font-form font-checkout" id="txtThanhtien">'.$giamoi.' <span class="">VND</span></label>
                                  </div> 
                                </div>
                                <hr style="background-color: black !important;">
                                <div class="row" style="margin-top: 10px !important;">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Thanh toán trước bằng hình thức chuyển khoản
                                    </label>
                                    <img class="" title="" src="/SEsport/public/img/visa_debit.png" alt="visa_debit" />
                                    <img class="" title="" src="/SEsport/public/img/mastercard.png" alt="mastercard" />
                                    <img class="" title="" src="/SEsport/public/img/paypal.png" alt="paypal" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Thanh toán khi nhận hàng
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                    </div>
                </div>
            </div>
          ';
        }
      }
    }	
  ?>
</form>
<script src="product-info.js"></script>