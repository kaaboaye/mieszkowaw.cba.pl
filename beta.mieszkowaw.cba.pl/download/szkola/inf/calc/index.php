	<form method="post">
		Liczba 1
		<input name='a'>
		Liczba 2 
		<input name='b'>
		<select name='dz'>
	    <option value='br'> Działanie </option>
	    <option value='do'> Dodawanie </option>
		<option value='od'> Odejmowanie </option>
		<option value='dz'> Dzielenie </option>
		<option value='mn'> Mnożenie </option>
		</select>
		<input type='submit' value='ok'>
		</form><br></br>
	  
	<?php
		
		$a=$_POST['a'];
		$b=$_POST['b'];
		$dz=$_POST['dz'];
		
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