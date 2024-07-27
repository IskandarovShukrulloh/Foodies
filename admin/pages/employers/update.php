<?php
print_r($_POST);
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender']; 
    $position = $_POST['position'];
    //$file = $_FILES['file']; 

$query = "UPDATE `Employers`
SET  `name` = '$name',
  `surname` = '$surname',
  `birthday` = '$birthday',
  `gender` = '$gender',
  `position` = '$position'
WHERE `id` = '$id';"; //, `file` = '$file'

echo $query;

$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('Success');
     window.location = '?page=3';
     </script>";}
}
?>