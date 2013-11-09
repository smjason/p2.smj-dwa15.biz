<h2>Log In</h2>
<form name= "login" method='POST' action='/users/p_login'>
	<table>
          <tr>
            <td><label>Email:</label></td>
            <td><input type='email' name='email' size= '25' required= "required" /></td>
	  		     </tr>
			       <tr>
            <td><label>Password:</label></td>
            <td><input type='password' name='password' size ='25' required= "required" onkeypress="capLock(event)"/></td>
          </tr>                    
  </table>

      <?php if($error && $error == 'user-exists'): ?>
        This user already exists
      <!-- Checking for blank fields, but wanted to add more error checking -->  
      <?php elseif(isset($error) && $error == 'invalid-login'): ?>
      <div id="error">
        Your login failed.
      </div>
      <?php endif; ?>
          <br>
          <input type='submit' value='Log In'>
</form
