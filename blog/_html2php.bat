@echo off

for /r _site\ %%i in (*.html) do rename "%%i" *.php