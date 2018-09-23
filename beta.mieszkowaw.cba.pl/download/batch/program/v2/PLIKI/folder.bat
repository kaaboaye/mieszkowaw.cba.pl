@ECHO OFF
title program Tajny Folder by Mieszko Wawrzyniak
:FOLDER
   echo by Mieszko Wawrzyniak
   echo.   
   if EXIST "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}" goto UNLOCK
   if NOT EXIST Private goto MDLOCKER
   :BLOCK 
    cls
    echo Napewno chcesz Zablokowac ten folder? (T/N)
    set/p "cho=>"
    if %cho%==T goto LOCK
    if %cho%==t goto LOCK
    if %cho%==N goto KONT
    if %cho%==n goto KONT
    echo Podaj T lub N
    goto BLOCK
   :LOCK
    cls
    ren Private "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
    attrib +h +s "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
    echo Folder zablokowany
    goto KONT_FOLD
   :UNLOCK
    cls
    echo Wpisz haslo do odblokowania folderu
    set/p "pass=>"
    if NOT %pass%== haslo goto FAIL
    attrib -h -s "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
    ren "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}" Private
    echo Folder Odblokowany Pozytywnie
    goto OPEN
   :FAIL
    cls
    echo Nieprawidlowe haslo
    goto KONT_FOLD
   :MDLOCKER
    cls
    md Private
    echo Folder Zalozony pozytywnie
    goto OPEN
   :OPEN
    cls
    start "priv" "Private"
	pause
	goto KONT_FOLD
   :KONT_FOLD
    cls
    echo Czy chcesz kontynulowac prace z folderem? (T/N) Aby wyjsc wprowadz "wyj".
    set/p "kont=>"
	cls
	if %kont%==T goto FOLDER
    if %kont%==t goto FOLDER
    if %kont%==N goto END
    if %kont%==n goto END
	if %kont%==wyj goto ENDA
	if %kont%==WYJ goto ENDA
    echo Podaj T lub N
    goto KONT_FOLD
   :END
   start "pro" "Programik.bat"
   exit
   :ENDA
   cls
   echo.
   echo by Mieszko Wawrzyniak
   echo.
   pause
   exit