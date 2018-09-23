@ECHO OFF
title program by Mieszko Wawrzyniak
 :START
  echo by Mieszko Wawrzyniak
  echo .
  echo Witaj czy chcesz kontynulowac? (T/N)
  set/p "start=>"
  if %start%==T goto CO
  if %start%==t goto CO
  if %start%==N goto END
  if %start%==n goto END
  echo Podaj T lub N
  goto START
 :CO
  echo Wprowadz nazwe programu lub wprowadz END by wyjsc.
  echo lista programow -- help
  set/p "co=>"
  if %co%==help goto HELP
  if %co%==HELP goto HELP
  if %co%==folder goto FOLDER
  if %co%==FLODER goto FOLDER
  if %co%==calc goto CALC
  if %co%==CALC goto CALC
  if %co%==end goto END
  if %co%==END goto END
  echo Blad zla komenda! Lista dostepnych koment -- help
  goto CO
 :HELP
  echo .
  echo Lista programow:
  echo .
  echo Tajny folder -- folder
  echo Kalkulator  -- calc
  echo .
  goto CO
  :CALC
    start "calc" %windir%\system32\calc.exe
	goto KONT
  :FOLDER
   if EXIST "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}" goto UNLOCK
   if NOT EXIST Private goto MDLOCKER
   :BLOCK 
    echo Napewno chcesz Zablokowac ten folder? (T/N)
    set/p "cho=>"
    if %cho%==T goto LOCK
    if %cho%==t goto LOCK
    if %cho%==N goto KONT
    if %cho%==n goto KONT
    echo Podaj T lub N
    goto BLOCK
   :LOCK
    ren Private "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
    attrib +h +s "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
    echo Folder zablokowany
    goto KONT_FOLD
   :UNLOCK
    echo Wpisz haslo do odblokowania folderu
    set/p "pass=>"
    if NOT %pass%== haslo goto FAIL
    attrib -h -s "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}"
    ren "Control Panel.{21EC2020-3AEA-1069-A2DD-08002B30309D}" Private
    echo Folder Odblokowany Pozytywnie
    goto OPEN
   :FAIL
    echo Nieprawidlowe haslo
    goto KONT_FOLD
   :MDLOCKER
    md Private
    echo Folder Zalozony pozytywnie
    goto OPEN
   :OPEN
    start "priv" "Private"
	pause
	goto KONT_FOLD
   :KONT_FOLD
    echo Czy chcesz kontynulowac prace z folderem? (T/N)
    set/p "kont=>"
    if %kont%==N goto START
    if %kont%==n goto START
    if %kont%==T goto FOLDER
    if %kont%==t goto FOLDER
    echo Podaj T lub N
    goto KONT_FOLD
  :KONT
    echo Czy chcesz kontynulowac? (T/N)
    set/p "kont=>"
    if %kont%==T goto CO
    if %kont%==t goto CO
    if %kont%==N goto END
    if %kont%==n goto END
    echo Podaj T lub N
    goto KONT
  :END 
   echo.
   echo by Mieszko Wawrzyniak
   echo.
   pause
   