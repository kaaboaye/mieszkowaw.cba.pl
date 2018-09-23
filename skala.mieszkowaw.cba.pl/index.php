
<html>
	<head>
		<title> Skala oceniania | mieszkowaw </title>
		<link rel="stylesheet" type="text/css" media="screen" href="style.css">
		<link rel="Shortcut icon" href="min.ico" />
		<meta name="keywords" content="Mieszko Wawrzyniak strona blog PHP HTML mieszkowaw skala oceniania" />
		<meta http-equiv="content-type" content "text/html" charset="UTF-8">
		<meta http-equiv="content-language" charset="pl">
	</head>
	<body style="margin:0">
	
		<?php include('cookie.php');?>
		
		<div id="ban">
			<img src="baner.jpg" width="100%" height="100%" style="border:0px"/>
		</div>
		
		<div id="men" valign="middle">
							<?php
							
								if(isset($_COOKIE[TestCookie]))
									{
										$spawn=ban;
									}
								else
									{
										if($_GET[cookie] == "tak")
											{
												$spawn=ban;
											}
										else
											{
												$spawn=cookie;
											}
									}
							
							
							?>
			
			<a href="http://mieszkowaw.cba.pl<?php  echo "#$spawn"; ?>">Strona głowna</a>
			|
			<a href="index.php<?php  echo "#$spawn"; ?>">Skala oceniania</a>
		</div>
		
		<div id="tex">
			<?php include ('../php/projektx/skala.php')?> 
		</div>
		<div id="end" align="right" valign="bottom">
			<?php include ('../plug/odw/odw.php')?> 
			|
			Liczba gości:<?php include ('licznik.php')?> 
			| 
			Kontakt:<a href="mailto:admin@mieszkowaw.cba.pl">admin@mieszkowaw.cba.pl</a>
		</div>
	</body>
</html>