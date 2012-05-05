<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" >
	<title>Kohana Blog</title>
	<?php echo HTML::style("public/css/template.css"); ?>
	<?php echo HTML::script("public/js/jquery-1.6.4.js"); ?>
</head>

<body>
<div id="wrapper">
	<div id="header"><h1>Kohana Blog</h1></div>
	
	<div id="navlist">
		<ul>
			<li><?php echo HTML::anchor("", "Home"); ?></li>
			<li><?php echo HTML::anchor("article", "Articles"); ?></li>
			<li><?php echo HTML::anchor("article/edit", "New Article"); ?></li>
		</ul>
	</div>
	
	<div id="content">
		<?php echo $content; ?>
	</div>
</div>
</body>
</html>