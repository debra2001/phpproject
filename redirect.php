 <?php
include_once __DIR__."/connection.php";
?>  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/red.css">
    <link rel="stylesheet" href="bootstrap/node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="navmenu">
  <div class="content">
     <nav >
     <ul class="ul">
        <li><a href="index.php">Form</a></li>
        <li><a href="#">Table</a></li>
     </ul>
    </nav>
  </div>
   
</div>


 <div>  
   
       
 <table class="table table-striped ">
  <thead class=>
    <tr >
      <th scope="col">id</th>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>            
    </tr>
  </thead>

<?php 
$sql="SELECT * FROM michelle";
$ret=mysqli_query($conn,$sql);
if(mysqli_num_rows($ret)>0){
    while($row=mysqli_fetch_assoc($ret)){
        ?>
        <tr>
            <td><?php echo $row["id"];?></td>
           
            <td><?php echo $row["firstname"];?></td>
            <td><?php echo $row["lastname"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["pasword"];?></td>    
        </tr> 
        <?php
    } 
}else{
echo "no results";
}

?>      
</table>
</div>
</div>
</body>
</html>















