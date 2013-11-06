
<h2>Log In</h2>
<form name= "login" method='POST' action='/users/p_login'>
	<table>
          <tr>
            <td><label>Email:</label></td>
            <td><input type='email' name='email' size= '25' required= "required" /></td>
	  		     </tr>
			       <tr>
            <td><label>Password:</label></td>
            <td><input type='password' name='password' size ='25'required= "required" onkeypress="capLock(event)"/></td>
          </tr>                    
</table>
          <br>
          <input type='submit' value='Log In'>
</form
