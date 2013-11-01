<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	<link href="/css/master.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<div id ="container">
<div id = "header">
	<h1>Blipblog</h1>
	<ul>
        <li><a href="/users/logout">Logout</a></li>
    </ul>
</div>
<div id = "content">
<body>	

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</div>
<div id="footer">
	<p>Copyright &copy; 2013 smj-dwa15 dot biz - Email: <a href="mailto:jsjason111@gmail.com">sjason111@gmail.com</a></p>
	<p>This website has been updated on October 28, 2013</p>
</div>
</div>
</html>