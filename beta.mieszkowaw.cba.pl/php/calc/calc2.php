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
		
		echo "<input name='a' value='$a'>";
		echo "<select name='dz'>";
	    echo "<option value='br' $defx>?</option>";
	    echo "<option value='do' $defdo>+</option>";
		echo "<option value='od' $defod>-</option>";
		echo "<option value='dz' $defdz>/</option>";
		echo "<option value='mn' $defmn>*</option>";
		echo "</select>";
		echo "<input name='b' value='$b' onchange='this.form.submit()'>";
		echo "<input style='width:8px' type='submit' value='='>";
		echo "</form>";
	  
		
        if ($dz == "do")
		     {
		     $w = $a + $b;
          	 echo "$w";
			 }
		elseif ($dz == "od")
		     {
			 $w = $a - $b;
		     echo "$w";
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
		     echo "$w";
			 }
			 }
	    elseif ($dz == "mn")
		     {
	         $w = $a * $b;
		     echo "$w";
			 }
		elseif ($dz == "br")
		     {
		     echo "Uzupełnij dane :)";
			 }
		
    ?>