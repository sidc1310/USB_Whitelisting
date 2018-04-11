@echo off
cls
wmic logicaldisk where drivetype=2 get name
SET /p "a=Choose pendrive: "
cd C:\xampp\mysql\bin
mysqldump -u root -p ab > "%a%:/database/ab.sql"

pause