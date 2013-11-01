<div id="menu">
    <ul>
        <li><a href="/users/index">Home</a></li>
        <li><a href="/users/login" id="youarehere">Login</a></li>
        <li><a href="mailto:jsjason111@gmail.com">Contact Me</a></li>
      <li><a href="feedback.html">Feedback</a></li>
    </ul>
</div>
<div id = "content">
<h2>Log In</h2>

<form method='POST'  action='/users/p_login'>
	<table>
          <tr>
            <td><label>Email:</label></td>
            <td><input type='text' name='email' /></td>
	  		     </tr>
			       <tr>
            <td><label>Password:</label></td>
            <td><input type='password' name='password' /></td>
          </tr>                    
</table>
          <br>
          <input type='submit' value='Log In'>
</form>
</div>
