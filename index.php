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
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
<div class="navmenu">
  <div class="content">
     <nav >
     <ul class="ul">
        <li><a href="#">Form</a></li>
        <li><a href="redirect.php">Table</a></li>
     </ul>
    </nav>
  </div>
   
</div>
 

             
   <div class="gif">
   <span class="imgc">
        <img src="image/9wJN.gif" alt="" class="img" width="100%">
   </span>
   </div>

    <div class="mom">
         <div class="container">
            <div class="child">


    <form action=""  method="post" id="error" name="firm" onsubmit="return validateform()">
    <label for="firstname" ><b>firstname</b></label>
        <input type="text"  id="first" placeholder="firstname" name="firstname" ><br><br>
       
        <label for="lastname"><b>lastname</b></label>
        <input type="text" id="last" placeholder="lastname" name="lastname" ><br><br>
        
        <label for="email"><b>email</b></label>
        <input  type="email" id="email" placeholder="Enter email" name="email" ><br><br>
       
        <label for="pasword" i><b> pasword</b></label>
        <input  type="password" id="password" placeholder=" Password" name=" pasword"><br><br>
        <p></p>
        
       <center><button type="submit" class="button">submit</button></center>
     
    </form>
</div>
  </div>
     </div>
 <?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['pasword'];
        $sql="INSERT INTO michelle(firstname,lastname,email,pasword) VALUES('$firstname','$lastname','$email','$password')";
       mysqli_query($conn,$sql);

       header("Location:redirect.php");
} 

?>
 <script src="js/index.js"></script>
</body>
</html>

            
            

