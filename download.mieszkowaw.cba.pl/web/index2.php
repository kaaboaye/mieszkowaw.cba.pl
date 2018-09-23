<?php

		$d1=$_POST['d1'];
		$d2=$_POST['d2'];

	if (isset($d1))
			{
			if($d1 == "szkola") $defszk = "selected=selected";
			}
		
echo "<form method='post'><ol>";
	echo "<input type='radio' name='d1' value='szkola' onchange='this.form.submit()' $defszk>Szkoła<br>";
		echo "<li>";
		
				if (isset($d2))
					{
					if($d2 == "inf") $definf = "selected=selected";
					}
				
			if ($d1 == szkola)
				{
				echo "<input type='radio' name='d2' value='inf' onchange='this.form.submit()' $definf>Informatyka<br>";
				}
		echo "</li>";
echo "</ol></form>";
?>
Szkoła

Informatyka

Kalkulator
<a id="b" href="http://download.mieszkowaw.cba.pl/szkola/inf/calc.php" alt="Kalkulator">Kalkulator</a>
<a id="b" href="http://download.mieszkowaw.cba.pl/szkola/inf/calc.txt" alt="Kalkulator - kod">Kalkulator - kod</a>