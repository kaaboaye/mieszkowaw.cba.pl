@echo off
title Usuwanie C:\Windows
set i=0
set roz=7681948689
:menu
echo Postep %i%/%roz% bajtow
set /a i=%i%+1
if %i%==%roz% pause
goto menu