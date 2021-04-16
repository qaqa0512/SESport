<?php
  include('/../connect.php');

  $action = $_POST['action'];
  $username = $_POST['UserName'];
  $password = $_POST['Password']; 
  
  if($conn){
    mysqli_select_db("sesport",$conn);
    $querylogin = "SELECT * FROM thanhvien WHERE tendangnhap = '$username' and matkhau = '$password'";
    mysqli_query($querylogin, $conn);
    $result = mysqli_query($querylogin, $conn);
    if(mysqli_num_rows($result)>0)
    {
      // while($row = mysqli_fetch_rows($result))
      // {

      // }
    }
    if(mysqli_num_rows($result)==1){
      echo 'success';
    }
    else{
      echo 'fail';
    }
  }
?>
