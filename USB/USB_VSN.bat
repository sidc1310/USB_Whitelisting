@echo off
cls

For /F "Skip=1 Delims=" %%A In (
    '"wmic logicaldisk where drivetype=2 get volumeserialnumber"'
) Do For /F   %%B In ("%%A") Do Set "letter=%%B" 


echo %letter%

pause