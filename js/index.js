
    function validateform(){
    
          var firstname = document.firm.firstname.value;
          var lastname = document.firm.lastname;
          var password=document.firm.pasword.value; 
          
          if (firstname.value==''||lastname.value==''){
            alert('enter all fields!');
            return false;
          }  
          else 
          if(password.length<6){
            alert ("pasword must be atleast six characters long.");
            return false;
          }
        }
          
   

          
               
