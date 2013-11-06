<h2>Create an account</h2>
<form method='POST' action='/users/p_signup'>
<table>
      <tr>
        <td><label>First Name:</label></td>
             <td><input type= 'text' name='first_name' size ='25'required placeholder= "Enter your First Name"></td>
	  	      </tr>
		        <tr>
                <td><label>Last Name:</label></td>
                <td><input type='text' name='last_name' size ='25'required placeholder= "Enter your Last Name"></td>
                 </tr>
                 <tr>
                 <td><label>Email:</label></td>
                <td><input type='email' name='email' size ='25'required placeholder= "Enter a valid email address"></td>
               </tr>
      	     <tr>
             <td><label>Password:</label></td>
        <td><input type='password' name='password' size ='25'required placeholder= "Enter your password" onkeypress="capLock(event)"/></td>
       </tr>
         
</table>
        <br>
        <input type='submit' value='Sign Up'>

</form>

