$( "#invoicesesport" ).click(function(e) {
  e.preventDefault();
  var Name = $('#txtName').val() ? $('#txtName').val() : '';
  var Lastname = $('#txtLastname').val() ? $('#txtLastname').val() : '';
  var Address = $('#txtAddress').val() ? $('#txtAddress').val() : '';
  var District = $('#txtDistrict').val() ? $('#txtDistrict').val() : '';
  var Phone = $('#txtPhone').val() ? $('#txtPhone').val() : '';
  // kiem tra rong khi dang nhap
  if(Name == ''){
      $('#errName').html('Bạn chưa nhập tên !');
  }
  if(Lastname == ''){
      $('#errLastname').html('Bạn chưa nhập họ !');
  }
  if(Address == ''){
    $('#errAddress').html('Bạn chưa nhập địa chỉ !');
  }
  if(District == ''){
    $('#errDistrict').html('Bạn chưa nhập quận, huyện !');
  }
  if(Phone == ''){
    $('#errPhone').html('Bạn chưa nhập phone !');
  }
  // xoa rong khi da dang nhap
  $( "#txtName" ).change(function() {
      $('#errName').html('');
  })
  $( "#txtLastname" ).change(function() {
      $('#errLastname').html('');
  })
  $( "#txtAddress" ).change(function() {
    $('#errAddress').html('');
  })
  $( "#txtDistrict" ).change(function() {
    $('#errDistrict').html('');
  })
  $( "#txtPhone" ).change(function() {
    $('#errPhone').html('');
  })
  if(Name && Lastname && Address && District && Phone != '')
  {
    Swal.fire(
      'Chúc mừng!',
      'Bạn đã đặt hàng thành công!',
      'success'
    );
    document.getElementById('txtName').value = '';
    document.getElementById('txtLastname').value = '';
    document.getElementById('txtAddress').value = '';
    document.getElementById('txtDistrict').value = '';
    document.getElementById('txtPhone').value = '';
  }
});
  