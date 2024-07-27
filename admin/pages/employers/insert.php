<?php
if(isset($_POST['save'])){
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $birthday = $_POST['birthday'];
  $gender = $_POST['gender']; 
  $position = $_POST['position'];
  $file = $_FILES['file']; 

// echo"". $name ."";
$targetDir = "../assets/images/employers/";
$image = time().'.jpg';
$targetFile = $targetDir . $file;
// echo $targetDir;
move_uploaded_file($_FILES["file"]["tmp_name"], __DIR__. ''.$_FILES['file']['name']);

$query = "INSERT INTO `Employers`
            (`name`,`surname`,`birthday`,`gender`,
             `position`, `file`)   
          VALUES ('$name','$surname','$birthday',
        '$gender','$position', '$file');"; 

// echo $query;

$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Success');
     window.location = '?page=3';
     </script>";}
}
?>