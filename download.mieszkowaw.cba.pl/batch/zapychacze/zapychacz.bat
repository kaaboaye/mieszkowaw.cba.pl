@echo off
set b=1
md nf
:start
echo f > nf/%random%
echo masz %b% zbednych plikow
set/a b=%b%+1
goto start