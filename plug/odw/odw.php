<?php
  
  
	if(!isset($_COOKIE['BlockOdw']))
		{
			if(!isset($_COOKIE['Odwiedziny']))
				{
						setcookie ("Odwiedziny", "0",time()+3*60*60*24*30);
						echo 'Witaj, gościu';
				}
				else
				{
						echo 'Witaj, byłeś tu ';
							$lod=$_COOKIE[Odwiedziny];
						echo "$lod raz(y)";
							$lod=$lod+1;
					setcookie ("Odwiedziny", time()-3*60*60*24*30);
					setcookie ("Odwiedziny", "$lod",time()+3*60*60*24*30);
					setcookie ("BlockOdw", time()-10*60);
					setcookie ("BlockOdw", "BlokadaPrzeciwF5",time()+10*60);
				}
		}
	else
		{
			echo 'Witaj, byłeś tu ';
				$lod=$_COOKIE[Odwiedziny];
			echo "$lod raz(y)";
			setcookie ("BlockOdw", time()-10*60);
			setcookie ("BlockOdw", "BlokadaPrzeciwF5",time()+10*60);
		}
		
 
?>