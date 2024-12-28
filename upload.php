<?php
$correctPassword = "2014131458"; // 替换为正确的密码

if(isset($_POST['password'])){
  $password = $_POST['password'];

  // 检查密码是否正确
  if($password === $correctPassword){
    if(isset($_FILES['file'])){
      $file = $_FILES['file'];
      
      // 保存文件到指定目录
      move_uploaded_file($file['tmp_name'], './qingdan/'.$file['name']);
      echo '清单文件上传成功！';
    }
  } else {
    echo '密码错误，清单文件上传失败！加QQ群：233380963获取密码';
  }
}
?>