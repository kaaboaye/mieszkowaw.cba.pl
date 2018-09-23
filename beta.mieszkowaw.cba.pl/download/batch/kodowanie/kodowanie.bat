@echo off
title kodowanie

	echo .
	echo Wpisz nazwe pliku w ktorym ma byc zapisana tresc.
	set/p "name=>"
	echo Wpisz tresc do zakodowania
	set/p "text=>"
	
		set has=1
		echo Wprowac haslo do zakodowania tekstu
		echo Haslo moze sie skladac tylko z liczb!!!
		set/p "haslo=>"
		set /a haslo1=%haslo%+1
		
		:kodowanie
		
					cls
					echo Postep: %has%/%haslo1%
					echo %text%

				
				set text=%text:2=1%
				set text=%text:2=1%
				set text=%text:3=2%
				set text=%text:4=3%
				set text=%text:5=4%
				set text=%text:6=5%
				set text=%text:7=6%
				set text=%text:8=7%
				set text=%text:9=8%
				set text=%text:0=9%
				set text=%text:q=0%
				set text=%text:w=q%
				set text=%text:e=w%
				set text=%text:r=e%
				set text=%text:t=r%
				set text=%text:y=t%
				set text=%text:u=y%
				set text=%text:i=u%
				set text=%text:o=i%
				set text=%text:p=o%
				set text=%text:a=p%
				set text=%text:s=a%
				set text=%text:d=s%
				set text=%text:f=d%
				set text=%text:g=f%
				set text=%text:h=g%
				set text=%text:j=h%
				set text=%text:k=j%
				set text=%text:l=k%
				set text=%text:z=l%
				set text=%text:x=z%
				set text=%text:c=x%
				set text=%text:v=c%
				set text=%text:b=v%
				set text=%text:n=b%
				set text=%text:m=n%
				
			set /a has=%has%+1
			if %has%==%haslo1% goto all
			goto kodowanie
	
	:all
	cls
echo %text% > %name%.txt
		echo Kodowanie zakonczone!!

		pause
		exit