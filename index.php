
<html>
	<head>
		<title>
			<?php
				
					if (empty($_GET['title']))
						{
							$title = "Start";
						}
					else
						{
							$title=$_GET['title'];
						}
				
				echo "$title | mieszkowaw";
			?>
		</title>
		<link rel="stylesheet" type="text/css" media="screen" href="style.css">
		<link rel="Shortcut icon" href="min.ico" />
		<meta name="keywords" content="Mieszko Wawrzyniak strona blog PHP HTML mieszkowaw" />
		<meta http-equiv="content-type" content "text/html" charset="UTF-8">
		<meta http-equiv="content-language" charset="pl">
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-46338079-1', 'cba.pl');
		  ga('send', 'pageview');

		</script>
	</head>
	<body style="margin:0">
	
		<?php include('plug/cookie/cookie.php');?>
		
		<div id="ban">
			<img src="baner.jpg" width="100%" height="100%" style="border:0px"/>
		</div>
		
		<?PHP  include('top.php'); ?>
		
		<div id="tex">
			<?php
				
				switch($_GET[strona])
					{
					case 'php': include ('php/index.php'); break;
					case 'projekty': include ('projekty_html/index.php'); break;
					case 'download' : include ('download.mieszkowaw.cba.pl/web/index.html') ; break;
					default: include('str.php');
					}
			?>
		</div>
		<div id="end" align="right" valign="bottom">
			<?php include ('plug/odw/odw.php')?> 
			|
			Liczba gości:<?php include ('plug/licznik/licznik.php')?> 
			| 
			Kontakt:<a href="mailto:admin@mieszkowaw.cba.pl">admin@mieszkowaw.cba.pl</a>
		</div>
	</body>
</html>