@echo off
:tw
echo Podaj nazwe pliku
set/p "name=>"
pause
cls
echo Podaj tekst
set/p "text=>"
cls
echo %text% > %name%.txt
goto end
:end
pause
exit