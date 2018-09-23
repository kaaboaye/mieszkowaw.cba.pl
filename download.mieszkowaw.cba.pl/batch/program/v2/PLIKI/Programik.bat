@ECHO OFF
title program by Mieszko Wawrzyniak
 :START
  cls
  echo.
  echo by Mieszko Wawrzyniak
  echo .
  echo Witaj czy chcesz kontynulowac? (T/N)
  set/p "start=>"
  if %start%==T goto COO
  if %start%==t goto COO
  if %start%==N goto END
  if %start%==n goto END
  echo Podaj T lub N
  goto START
 :COO
  cls
  goto CO
 :CO
  echo .
  echo Wprowadz nazwe programu lub wprowadz END by wyjsc.
  echo lista programow -- help
  set/p "co=>"
  cls
  if %co%==help goto HELP
  if %co%==HELP goto HELP
  if %co%==folder goto FOLDER
  if %co%==FLODER goto FOLDER
  if %co%==calc goto CALC
  if %co%==CALC goto CALC
  if %co%==firefox goto FOX
  if %co%==FIREFOX goto FOX
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
  echo Mozilla Firefox -- firefox
  echo .
  goto CO
  :FOX
   start "net" "%programfiles%\Mozilla Firefox\firefox.exe"
   pause
   goto COO
  :CALC
    start "calc" %windir%\system32\calc.exe
	pause
	goto COO
  :FOLDER
    start "folder" "folder.bat"
	goto ENDD
  :KONT
    cls
    echo.
    echo Czy chcesz kontynulowac? (T/N)
    set/p "kont=>"
    if %kont%==T goto COO
    if %kont%==t goto COO
    if %kont%==N goto END
    if %kont%==n goto END
    echo Podaj T lub N
    goto KONT
  :ENDD
  exit
  
  :END 
   cls
   echo.
   echo by Mieszko Wawrzyniak
   echo.
   pause
   exit