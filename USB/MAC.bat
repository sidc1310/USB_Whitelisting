@echo off
cls

For /F "Skip=1 Delims=" %%A In (
    '"wmic csproduct get uuid"'
) Do For /F   %%B In ("%%A") Do Set "letter=%%B" 


echo %letter%

pause