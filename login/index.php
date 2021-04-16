<?php
  session_start();
?>
<!dOCTYPE html>
<html>
<head>
  <?php include __DIR__ . "/../header.php"; ?>
</head>
<body>
  <div class="page login">
    <section class="dashboard-counts">
      <div class="container">
        <!--Login screen-->
        <form>
          <div class="d-flex justify-content-center h-100">
            <div class="card card-login">
              <div class="card-header">
                <h3>Đăng nhập</h3>
                <div class="d-flex justify-content-end social_icon">
                  <span><i class="fab fa-facebook-square"></i></span>
                  <span><i class="fab fa-twitter-square"></i></span>
                  <a href="/se-sport/index.php" style="margin-left: 0px !important;"> 
                      <img class="logo-login" src="/se-sport/public/img/logo.png"  alt="SE Sport">
                  </a>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Tài khoản" name="txtUsername" id="txtUsername">
                  </div>
                  <div style="margin-bottom: 8px !important;">
                    <span id="errUsername" class="alert-err"></span>
                  </div>
                  <div class="input-group form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Mật khẩu" name="txtPassword" id="txtPassword">
                  </div>
                  <div style="margin-bottom: 8px !important;">
                    <span id="errPassword" class="alert-err"></span>
                  </div>
                  <div style="margin-bottom: 8px !important;">
                    <span id="errAlert" class="alert-err"></span>
                  </div>
                  <div class="row align-items-center remember">
                    <input type="checkbox">Ghi nhớ tài khoản
                  </div>
                  <div class="form-group">
                    <input type="button" name="login" id="loginsesport" value="Đăng nhập" class="btn float-right login_btn">
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <div class="d-flex justify-content-center links">
                  Bạn chưa có tài khoản?<a class="login-footer" href="#">Đăng ký</a>
                </div>
                <div class="d-flex justify-content-center">
                  <a class="login-footer" href="#">Quên mật khẩu?</a>
                </div>
              </div>
            </div>
          </div>
        </form> 
        <!--End the login screen-->
      </div>
    </section>
  </div>
  <script src="login.js"></script>
</body>
</html>