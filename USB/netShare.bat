@echo off
cls

For /F "Skip=1 Delims=" %%A In (
    '"wmic logicaldisk where drivetype=2 get name"'
) Do For /F   %%B In ("%%A") Do Set "letter=%%B" 

For /F "Skip=1 Delims=" %%A In (
    '"wmic logicaldisk where drivetype=2 get VolumeName"'
) Do For /F   %%B In ("%%A") Do Set "sharename=%%B" 


net share %sharename%=%letter% /GRANT:Everyone,full

pause