@echo off
title Mikser
set kol=1
:n
		
		color %col%
		echo %random%%random%%random%%random%%random%%random%%random%%random%%random%%random%%random%%random%%random%%random%%random%
		
		if %kol% == 1 set col=1
		if %kol% == 2 set col=2
		if %kol% == 3 set col=3
		if %kol% == 4 set col=4
		if %kol% == 5 set col=5
		if %kol% == 6 set col=6
		if %kol% == 7 set col=7
		if %kol% == 8 set col=8
		if %kol% == 9 set col=9
		if %kol% == 10 set col=A
		if %kol% == 11 set col=B
		if %kol% == 12 set col=C
		if %kol% == 13 set col=D
		if %kol% == 14 set col=E
		if %kol% == 15 set col=F
		
	set /a kol+=1
	if %kol%==16 set kol=1
goto n