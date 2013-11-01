<div id="menu">
    <ul>
        <li><a href="index.php" id="youarehere">Home</a></li>
        <li><a href="users/profiles">Profiles</a></li>
        <li><a href="mailto:jsjason111@gmail.com">Contact Me</a></li>
      <li><a href="feedback.html">Feedback</a></li>
    </ul>
</div>
<div id = "content">
<h2>Sign Up</h2>

<form method = 'POST' action='/users/p_signup'>
<table>
      <tr>
        <td><label>First Name:</label></td>
        <td><input type= 'text' name='first_name'></td>
	  	  </tr>
		    <tr>
        <td><label>Last Name:</label></td>
        <td><input type='text' name='last_name'></td>
        </tr>
        <tr>
        <td><label>Email:</label></td>
        <td><input type='text' name='email'></td>
        </tr>
      	<tr>
        <td><label>Password:</label></td>
        <td><input type='password' name='password'></td>
       </tr>
         
</table>
        <br>
        <input type='submit' value='Sign Up'>

</form>
</div>
