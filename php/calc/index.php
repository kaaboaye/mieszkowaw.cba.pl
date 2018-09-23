<?php
			$ca=$_POST['ca'];

		if (isset($_POST['ca']))
			{
			if($ca == "1") $def1 = "selected=selected"; 
			elseif($ca == "2") $def2 = "selected=selected";
			else $defx = "selected=selected";
			}
			echo "<form method='post'>";
			echo " Wybierz wersje kalkulatora <select name='ca' onchange='this.form.submit()'>";
			echo "<option value='brak' $defx> --- brak --- </option>";
			echo "<option value='1' $def1> Kalkulator v1 </option>";
			echo "<option value='2' $def2> Kalkulator v2 </option>";
			echo "</select><br></br>";
			
				
				if($ca == "1")
				 {
					include('php/calc/calc.php');
				 }
				 elseif($ca == "2")
				 {
					include('php/calc/calc2.php');
				 }
				 elseif($op == "brak")
				 {
					echo "Śmiało wybierz coś :P";
				 }
			echo "</span></div></form>";
?>