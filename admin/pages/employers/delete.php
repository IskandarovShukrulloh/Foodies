<?php

if(isset($_GET['id'])){
    $id = $_GET['id']; 

$query = "Delete from Employers where id = $id";

$result = mysqli_query($conn, $query);

if($result){
    echo "<script>alert('Success');
     window.location = '?page=3';
     </script>";}
}
?>