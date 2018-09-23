<?php
	 
			switch($_POST['op'])
				{
					case 'Kalkulator' : $defkalkulator = 'selected="selected"'; break;
					case 'projektx' : $defprojektx = 'selected="selected"'; break;
					case 'mail' : $defmail = 'selected="selected"'; break;
					default: $defx = 'selected="selected"';
				}
		
			echo "<form method='post'>";
			echo "Wybierz program <select name='op' onchange='this.form.submit()'>";
			echo "<option $defx> --- brak --- </option>";
			echo "<option value='Kalkulator' $defkalkulator> Kalkulator </option>";
			echo "<option value='projektx' $defprojektx> ProjektX </option>";
			echo "<option value='mail' $defmail> Mail </option>";
			echo "</select>";
		
			
			switch($_POST['op'])
					{
					case 'Kalkulator': include ('calc/index.php'); break;
					case 'projektx': include ('projektx/index.php'); break;
					case 'mail' : include ('mail/index.php') ; break;
					default: echo "Śmiało wybierz coś :P";
					}
				
			echo "</form>";
	?>