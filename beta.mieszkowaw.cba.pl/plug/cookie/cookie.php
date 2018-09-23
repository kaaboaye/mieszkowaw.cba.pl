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
					$strcookienie='plug/cookie/nie.php';
					include ("$lok$strcookienie");
				}
		}

?>