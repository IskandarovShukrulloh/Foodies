<link rel="stylesheet" href="../../../dist/css/adminlte.css">
<table class="table">
  <tr>
    <th>#</th>
    <th>Фото</th>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Дата рождения</th>
    <th>Пол</th>
    <th>Должность</th>
    <th>Удалить</th>
    <th>Изменить</th>
  </tr>

<?php
// require_once('')

 $query =  "Select * from Employers;";
 $result = mysqli_query($conn, $query); 
 $i= 0;
 while ($row = mysqli_fetch_assoc($result)) {
 $i++;

?>
  <tr>
    <td><?=$i;?></td>
    <td><?=$row['file'];?></td>
    <td><?=$row['name'];?></td> 
    <td><?=$row['surname'];?></td> 
    <td><?=$row['birthday'];?></td> 
    <td><?=$row['gender'];?></td> 
    <td><?=$row['position'];?></td> 
    <td><a class="btn btn-danger" href="?page=6&id=<?=$row['id']?>">Delete</a></td>
    <td><a class="btn btn-success" href="?page=4&id=<?=$row['id']?>">Edit</a></td>
  </tr>
    
<?php

}
?>
</table>
 