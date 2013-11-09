<h2>Create an account</h2>
<form method='POST' action='/users/p_signup'>
<table>
      <tr>
        <td><label>First Name:</label></td>
             <td><input type= 'text' name='first_name' size ='25'required= "required"></td>
	  	      </tr>
		        <tr>
                <td><label>Last Name:</label></td>
                <td><input type='text' name='last_name' size ='25'required= "required"></td>
                 </tr>
                 <tr>
                 <td><label>Email:</label></td>
                <td><input type='email' name='email' size ='25'required= "required"></td>
               </tr>
      	     <tr>
             <td><label>Password:</label></td>
        <td><input type='password' name='password' size ='25'required= "required" onkeypress="capLock(event)"/></td>
       </tr>
         
</table>
      <?php if($error && $error == 'user-exists'): ?>
         <div id="error">
        This user already exists
        </div>
      <!-- Checking for blank fields, but wanted to add more error checking -->  
      <?php elseif(isset($error) && $error == 'invalid-login'): ?>
        <div id="error">
        Your login failed.
        </div>
      <?php endif; ?>
        <br>
        <input type='submit' value='Sign Up'>

</form>

