<form>
  <div class="card checkout-size">
      <h3 class="card-header header-checkout">Thông tin chi tiết hóa đơn</h3>
      <div class="card-body">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-md-6">
                      <div  class="form-group">
                          <label class="col-form-label font-form">Tên <span class="label-required">*</span></label><span id="errName" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
                          <div class="">
                              <input value=""  id="txtName" name="" type="text" class="form-control input-checkout">
                          </div>
                          <span id="" class="err alert-checkout"></span>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div  class="form-group">
                          <label class="col-form-label font-form">Họ <span class="label-required">*</span></label><span id="errLastname" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
                          <div class="">
                              <input value=""  id="txtLastname" name="" type="text" class="form-control input-checkout">
                          </div>
                          <span id="" class="err alert-checkout"></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="col-form-label font-form">Địa chỉ <span class="label-required">*</span></label><span id="errAddress" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
                          <div class="">
                              <input value=""  id="txtAddress" name="" type="text" class="form-control input-checkout" placeholder="Số nhà, đường...">
                          </div>
                          <span id="" class="err alert-checkout"></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label class="col-form-label font-form">Quận / Huyện / Thị trấn <span class="label-required">*</span></label><span id="errDistrict" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
                          <div class="">
                              <input value=""  id="txtDistrict" name="" type="text" class="form-control input-checkout">
                          </div>
                          <span id="" class="err alert-checkout"></span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="col-form-label font-form">Điện thoại <span class="label-required">*</span></label><span id="errPhone" class="alert-err" style="float: right !important;margin-top: 8px !important;"></span>
                          <div class="">
                              <input value="" id="txtPhone" name="" type="text" class="form-control input-checkout">
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="col-form-label font-form">Email</label>
                          <div class="">
                              <input value="" id="" name="" type="email" class="form-control input-checkout">
                          </div>
                      </div>
                  </div>
              </div> 
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label class="col-form-label font-form" for="note">Ghi chú</label>
                        <textarea class="form-control input-checkout" id="note" rows="3"  placeholder="Những thông tin mà bạn muốn bổ sung khi đặt hàng"></textarea>
                      </div>
                  </div>
              </div>        
          </div>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary check-button" id="invoicesesport" data-toggle="modal" data-target="#myModal" role="button" aria-pressed="true">ĐẶT HÀNG</a>
      </div>
  </div>
</form>
<script src="invoice-details.js"></script>