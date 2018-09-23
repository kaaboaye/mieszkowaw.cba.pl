@echo off
setlocal enabledelayedexpansion

set l0=#####
set l1=#   #
set l2=#   #
set l3=#   #
set l4=#####

for /l %%y in (0,1,4) do (
for /l %%x in (0,1,4) do (
set x%%xy%%y=!l%%y:~%%x,1!
)
)

set x=3
set y=3
:scr
cls
set v=!x%x%y%y%!
set x%x%y%y%=@

for /l %%y in (0,1,4) do (
set l=
for /l %%x in (0,1,4) do (
set l=!l!!x%%xy%%y!
)
echo !l!
)
set x%x%y%y%=%v%
set /a py=%y%+1
if "!x%x%y%py%!"==" " set y=%py%
ping localhost -n 2 >nul
call 1.bat
if %kierunek%==1 (set vx=%x%&set /a vy=%y%-1&echo set kierunek=354>kierunek.bat&goto move)
if %kierunek%==2 (set vx=%x%&set /a vy=%y%+1&echo set kierunek=354>kierunek.bat&goto move)
if %kierunek%==3 (set /a vx=%x%-1&set vy=%y%&echo set kierunek=354>kierunek.bat&goto move)
if %kierunek%==4 (set /a vx=%x%+1&set vy=%y%&echo set kierunek=354>kierunek.bat&goto move)
if %kierunek%==5 exit
goto scr

:move
if "!x%vx%y%vy%!"==" " (set x=%vx%&set y=%vy%)
goto scr