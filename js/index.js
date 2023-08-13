
     var wform=document.getElementById(firm);
     wform.addEventListener("submit",(e) => {e.preventDefault();
    
          var firstname = document.getElementById('first');
          var lastname = document.getElementById('last');
          
          if (firstname.value==''||password.value==''){
            alert('enter all fields!');
          }  
          else{
            alert('form submittedd succesfully');
          }
        }
          );
   

          
               
