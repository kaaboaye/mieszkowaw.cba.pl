	<form method="post">
		<?php
		$a=$_POST['a'];
		$b=$_POST['b'];
		$dz=$_POST['dz'];
		
		if (isset($_POST['dz']))
		{
		if($dz == "do") $defdo = "selected=selected";
		elseif($dz == "od") $defod = "selected=selected";
		elseif($dz == "dz") $defdz = "selected=selected";
		elseif($dz == "mn") $defmn = "selected=selected";
		else $defx = "selected=selected";
		}
		
		echo "Liczba 1 ";
		echo "<input name='a' value='$a'>";
		echo " Liczba 2 ";
		echo "<input name='b' value='$b'>";
		echo "<select name='dz' onchange='this.form.submit()'>";
	    echo "<option value='br' $defx> Działanie </option>";
	    echo "<option value='do' $defdo> Dodawanie </option>";
		echo "<option value='od' $defod> Odejmowanie </option>";
		echo "<option value='dz' $defdz> Dzielenie </option>";
		echo "<option value='mn' $defmn> Mnożenie </option>";
		echo "</select>";
		echo "<input style='width:8px' type='submit' value='='>";
		echo "</form>";
	  
		
        if ($dz == "do")
		     {
		     $w = $a + $b;
			 $dzz = '+';
          	 echo "Działanie: $a$dzz$b=$w";
			 }
		elseif ($dz == "od")
		     {
			 $w = $a - $b;
			 $dzz = '-';
		     echo "Działanie: $a$dzz$b=$w";
			 }
	    elseif ($dz == "dz")
		     {
			 if ($b == 0)
			    {
			    echo "Sorry B. nie da rady przez zero :P";
				}
			 else
			 {
			 $w = $a / $b;
			 $dzz = '/';
		     echo "Działanie: $a$dzz$b=$w";
			 }
			 }
	    elseif ($dz == "mn")
		     {
	         $w = $a * $b;
			 $dzz = '*';
		     echo "Działanie: $a$dzz$b=$w";
			 }
		elseif ($dz == "br")
		     {
		     echo "Uzupełnij dane :)";
			 }
		
    ?>