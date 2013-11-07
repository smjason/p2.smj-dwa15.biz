<h1>Here is your profile information  <?=$user->first_name?> </h1>

<div id="profile">
<ul>
	<li>Name: <?=$user->first_name?> <?=$user->last_name?></li>
	<li>Email: <?=$user->email?></li>
</ul>
<p>Update your profile email address below.</P>
<form name= "login" method='POST' action='/users/p_profile'>
	<table>
		<tr>
            <td><label>Email:</label></td>
            <td><input type='email' name='email' size='35' required= "required"/></td>
	  	</tr>
	  	 		
	</table>
	<input type='Submit' value= 'Update'>
</form>
</div>