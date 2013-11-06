<h1>Here is the profile for <?=$user->first_name?> </h1>

<div id="profile">
<ul>
	<li>Name: <?=$user->first_name?> <?=$user->last_name?></li>
	<li>Email: <?=$user->email?></li>
</ul>
<p>Update your profile information below.</P>
<form name= "login" method='POST' action='/users/p_profile'>
	<table>
		<tr>
            <td><label>First Name:</label></td>
            <td><input type='text' name='first_name' size='35'required placeholder= "Enter Updated First Name" /></td>
	  		</tr>
	  		<tr>
            <td><label>Last Name:</label></td>
            <td><input type='text' name='last_name' size='35' required placeholder = "Enter Updated Last Name" /></td>
	  		</tr>
          	<tr>
            <td><label>Email:</label></td>
            <td><input type='email' name='email' size='35' required placeholder= "Enter Updated Email Address" /></td>
	  		</tr>
	  	 		
	</table>
	<input type='Submit' value= 'Update'>
</form>
</div>