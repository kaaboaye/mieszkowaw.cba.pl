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

	<div id="men" valign="middle">
		<a href="index.php<?php  echo "#$spawn"; ?>">Start</a>
		|
		<a href="?strona=php&title=PHP<?php  echo "#$spawn"; ?>">PHP</a>
		|
		<a href="?strona=projekty&title=Projekty HTML<?php  echo "#$spawn"; ?>">Projekty HTML</a>
		|
		<a href="?strona=download&title=Pobieranie<?php  echo "#$spawn"; ?>">Pobieranie</a>
		|
		<a href="http://skala.mieszkowaw.cba.pl/<?php  echo "#$spawn"; ?>">Skala oceniania</a>
	</div>