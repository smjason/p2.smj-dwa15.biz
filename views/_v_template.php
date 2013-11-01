<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	<link href="/css/master.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<div id="container">
<div id = "header">
	<h1>Blipblog</h1>
	<h2>Life's goes by in a blip, so blog away</h2>
</div>

<body>	

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
<div id="footer">
	<p>Copyright &copy; 2013 smj-dwa15 dot biz - Email: sjason111@gmail.com</p>
	<p>This website has been updated on October 28, 2013</p>
</div>
</div>
</html>