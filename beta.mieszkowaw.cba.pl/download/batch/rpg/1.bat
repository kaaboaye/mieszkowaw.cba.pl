@echo off
title 
mode con cols=19 lines=1
:start
cls
choice /c:wsadq /n
if "%errorlevel%"=="1" (echo set kierunek=1)>kierunek.bat
if "%errorlevel%"=="2" (echo set kierunek=2)>kierunek.bat
if "%errorlevel%"=="3" (echo set kierunek=3)>kierunek.bat
if "%errorlevel%"=="4" (echo set kierunek=4)>kierunek.bat
if "%errorlevel%"=="5" (echo set kierunek=5)>kierunek.bat&exit
goto start