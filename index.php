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
<script>
     
             var firstname= document.getElementById('first')
             var password=document.getElementById('password')


    form.addeventlistener(validate(),'submit')

    function validate(e){

             if (firstname==null||firstname===""){
                alert ("name cant be blank")
                return false;
             }
            }     
               
</script>
             
    <div class="imgc">
        <img src="image/9wJN.gif" alt="" class="img" width="100%">
    </div>
    <div class="mom"> <div class="container">
        <div class="child">

<div id="error"></div>
    <form action="index.php"  method="post" id="firm">
    <label for="firstname" ><b>firstname</b></label>
        <input type="text"  id="first" placeholder="firstname" name="firstname" required><br><br>
       
        <label for="lastname"><b>lastname</b></label>
        <input type="text" id="last" placeholder="lastname" name="lastname" required><br><br>
        
        <label for="email"><b>email</b></label>
        <input  type="email" id="email" placeholder="Enter email" name="email" required><br><br>
       
        <label for="pasword" i><b> pasword</b></label>
        <input  type="password" id="password" placeholder=" Password" name=" pasword" required><br><br>
        <p></p>
        <label for="password" > confirm password </label>
        <input type="password" id="password2" placeholder="password" name="confirmpassword" required>
       <center><button type="submit" class="button">Login</button></center>
     
    </form></div>
<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['pasword'];


        $sql="INSERT INTO michelle(firstname,lastname,email,pasword) VALUES('$firstname','$lastname','$email','$password')";
       mysqli_query($conn,$sql);
} 
    ?>


            
            
</body>
</html>