$( "#loginsesport" ).click(function(e) {
  e.preventDefault();
  var action = "do_login";
  var UserName = $('#txtUsername').val() ? $('#txtUsername').val() : '';
  var Password = $('#txtPassword').val() ? $('#txtPassword').val() : '';
  // kiem tra rong khi dang nhap
  if(UserName == ''){
      $('#errUsername').html('Chưa nhập tên đăng nhập !');
  }
  if(Password == ''){
      $('#errPassword').html('Chưa nhập mật khẩu !');
  }
  // xoa rong khi da dang nhap
  $( "#txtUsername" ).change(function() {
      $('#errUsername').html('');
  })
  $( "#txtPassword" ).change(function() {
      $('#errPassword').html('');
  })
  if(UserName != "" && Password != "")
  {
    $.ajax({
      url : "./login.php",
      method : "POST",
      data : {
        action : action,
        UserName : UserName,
        Password : Password
      },
      success : function(data)
      {
        if(data == "success")
        {
          window.location.href="http://localhost/SEsport/index.php";
        }
        else{
          $('#errAlert').html('Tên đăng nhập hoặc mật khẩu không đúng !');
          $('#txtUsername').val('');
          $('#txtPassword').val('');
        }
      }
    })
  }
});
