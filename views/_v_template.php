<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	<link href="/css/master.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>	
<div id ="container">
<div id = "header">
	<h1><a href="/users/index">BeachBlog</a></h1>
	<ul>
		<?php if($user): ?>
        <li><a href="/users/logout">Logout |</a></li>
        <li><a href="/users/profile">My Profile |</a></li>
        <li>Logged in as <?=$user->first_name?></li>
    </ul>
		<?php endif; ?>
</div>
<div id = "content">
<div id ="menu">
		<?php if($user): ?>
	<ul>
		<li><a href='/users/index'>Home</a></li>
		<li><a href='/posts/add'>Add Post</a></li>
		<li><a href='/posts'>View Post</a></li>
		<li><a href='/posts/users'>Follow Users</a></li>
		</ul>
		<?php else: ?>
		<ul>
		<li><a href='/users/signup'>Sign up</a></li>
		<li><a href='/users/login'>Log in</a></li>
	</ul>
	<?php endif; ?>
</div>
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

</div>
<div id="footer">
	<p>Copyright &copy; 2013 smj-dwa15 dot biz - Email: <a href="mailto:jsjason111@gmail.com">sjason111@gmail.com</a></p>
	<p>This website has been updated on November 2, 2013</p>
</div>
</div>
</body>
</html>