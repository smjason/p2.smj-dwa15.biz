<h2>Sign Up</h2>
<form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"'/users/p_signup'>
<table>
      <tr>
        <td><label>First Name:</label></td>
             <td><input type= 'text' name='first_name' required='required'></td>
	  	      </tr>
		        <tr>
                <td><label>Last Name:</label></td>
                <td><input type='text' name='last_name' required='required'></td>
                 </tr>
                 <tr>
                 <td><label>Email:</label></td>
                <td><input type='email' name='email' required= "required"></td>
               </tr>
      	     <tr>
             <td><label>Password:</label></td>
        <td><input type='password' name='password' required= "required" onkeypress="capLock(event)"/></td>
       </tr>
         
</table>
        <br>
        <input type='submit' value='Sign Up'>

</form>

