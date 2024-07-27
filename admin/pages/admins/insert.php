<?php
require_once ('../config.php');

if(isset($_POST['save'])){
  $username = $_POST['username'];
  $login = $_POST['login'];
  $_password = $_POST['password'];



$query = "SELECT * FROM admins
    WHERE login = '$login';";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){?>
  <div class="alert alert-danger">
      Администратор уже существует!
      Выберите другое имя пользователя.
  </div>
  <?php

}else{
  $q = "INSERT INTO `admins`(`username`,`login`,`password`)
  VALUES ('$username','$login','$_password');";
  $res = mysqli_query($conn, $q);

  $row = mysqli_fetch_assoc($result);  

  $_SESSION['uid'] = $row['id'];
  $_SESSION['username'] = $row['username'];

  echo "Success";
}



// $query = "INSERT INTO `admins`
//             (`username`,`login`,`password`)
// VALUES ('$username','$login','$_password');"; 
// if($result){
//     echo "<script>alert('Success');
//      window.location = 'index.php';
//      </script>";}
}

?>