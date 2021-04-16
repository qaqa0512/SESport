<?php
  include('/../../connect.php');
?>
<div class="row" style="margin: 70px 0px 30px 0px !important">
  <div class="container">
    <div class="product-group">
        <div class="row">
          <?php
              if($conn)
              {
                mysqli_select_db("sesport",$conn);
                $madanhmuc = $_GET['madm2'];
                $sql="Select *,FORMAT(gia,3),FORMAT(giacu,3) as giamoi from sanpham where madanhmuc='$madanhmuc'";
                $showproduct = mysqli_query($sql,$conn);
                if(mysqli_num_rows($showproduct)>0)
                {
                  // $sanpham=mysql_fetch_row($showproduct);
                  // foreach ($sanpham as $key => $value){
                  //   echo $value['tensp'];
                  // }
                  while($sanpham=mysqli_fetch_row($showproduct))
                  {
                    $masanpham=$sanpham[0];
                    $madanhmuc=$sanpham[1];
                    $tensanpham=$sanpham[2];
                    $size=$sanpham[3];
                    $mota=$sanpham[4];
                    $giacu=$sanpham[5];
                    $gia=$sanpham[6];
                    $hinh="/se-sport/public/img/".$sanpham[7];
                    $giamoi=$sanpham[9];
                    $giacudv=$sanpham[10];
                    echo '<div class="col-md-3 col-sm-6 col-12">
                              <div class="card card-product mb-3 card-clb">
                                  <a href="/SEsport/content/checkout/index.php?muangaymasp='.$masanpham.'"><img src="'.$hinh.'" class="card-img-top img-product"></a>
                                  <img class="card-img-overlay img-cart" src="/SEsport/public/img/shoppingcart.png" alt="shopping cart">
                                  <img class="card-img-overlay img-heart" src="/SEsport/public/img/heart.png" alt="heart">
                                  <div class="card-body">                     
                                      <h5 class="card-title product-title">'.$tensanpham.'</h5>
                                      <div class="card-text product-price">
                                          <span class="del-price">'.$giacudv.' VND</span>
                                          <span class="new-price">'.$giamoi.' VND</span>
                                      </div>
                                  </div>
                              </div>
                          </div>';
                  }
                }
              }	
            ?>
        </div>
    </div>
  </div>
</div>
<div class="row">
  <nav aria-label="Page navigation example" class="pagination-clb">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only" tabindex="-1">Previous</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link">1<span class="sr-only">(current)</span></a></li>
      <li class="page-item">
        <a class="page-link">2</a>
      </li>
      <li class="page-item"><a class="page-link">3</a></li>
      <li class="page-item ">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
<script>
  $('li').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
</script>


