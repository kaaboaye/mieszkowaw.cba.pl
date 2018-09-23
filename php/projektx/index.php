  	 <?php
						switch($_POST['oppro'])
							{
								case 'skala': $defskala = "selected=selected"; break;
								default: $defx = "selected=selected"; break;
							}
							
						echo "<form method='post'>";
						echo "Wybierz program <select name='oppro' onchange='this.form.submit()'>";
						echo "<option value='brak' $defx> --- brak --- </option>";
						echo "<option value='skala' $defskala> Skala oceniania </option>";
						echo "</select>";
						
						
						switch($_POST['oppro'])
								{
								case 'skala': include ('php/projektx/skala.php'); break;
								default: echo "Śmiało wybierz coś :P";
								}
								
						echo "</form>";
?>