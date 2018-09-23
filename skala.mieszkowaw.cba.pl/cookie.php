<?php

	if($_GET[cookie] == "tak")
		{
		setcookie ("TestCookie", "zgoda",time()+3*60*60*24*30);
		}
	else
		{
			if(isset($_COOKIE['TestCookie']))
				{
					setcookie ("TestCookie",time()-3*60*60*24*30);
					setcookie ("TestCookie", "zgoda",time()+3*60*60*24*30);
				}
			else
				{
						echo "<div id='cookie'>";
						echo "<center><strong>";
							echo "<span id='texnag'></br></br> Ten serwis używa cookies i podobnych technologii.</br></span></br>";
							
							echo "<span id='textex'> Brak zmiany ustawienia przeglądarki oznacza zgodę na to.</br></span></br>";
							
							echo " <a id='c' href='index.php?strona=$_GET[strona]&title=$_GET[title]&cookie=tak#ban'>Zrozumiałem</a>";
							
							echo "</br></br><a id='c' href='index.php?strona=$_GET[strona]&title=$_GET[title]&cookie=tak#ban'><img src='st.ico' width='20%' height='20%'></a>";
							
						echo "</center></strong>";
						
						echo "</div>";
				}
		}

?>