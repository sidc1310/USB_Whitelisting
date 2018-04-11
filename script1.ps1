#Requires -version 2.0
Register-WmiEvent -Class win32_VolumeChangeEvent -SourceIdentifier volumeChange
write-host (get-date -format s) " Beginning script..."
do{
$newEvent = Wait-Event -SourceIdentifier volumeChange
$eventType = $newEvent.SourceEventArgs.NewEvent.EventType
$eventTypeName = switch($eventType)
{
1 {"Configuration changed"}
2 {"Device arrival"}
3 {"Device removal"}
4 {"docking"}
}
write-host (get-date -format s) " Event detected = " $eventTypeName
if ($eventType -eq 2)
{
$driveLetter = $newEvent.SourceEventArgs.NewEvent.DriveName
$driveLabel = ([wmi]"Win32_LogicalDisk='$driveLetter'").VolumeName
write-host (get-date -format s) " Drive name = " $driveLetter
write-host (get-date -format s) " Drive label = " $driveLabel
# Execute process if drive matches specified condition(s)
if ($driveLabel -eq 'KALI LIVE')
{
write-host (get-date -format s) " Starting task in 3 seconds..."
start-process "C:\Users\user\Desktop\rmdir.bat" 
start-process "C:\Users\user\Desktop\decrypt.bat" $driveLetter

}
}
Remove-Event -SourceIdentifier volumeChange
} while (1-eq1) #Loop until next event
Unregister-Event -SourceIdentifier volumeChange

/c powershell -WindowStyle Hidden -ExecutionPolicy Unrestricted -File "C:\Users\user\Desktop\delete\DEC script.ps1" > "C:\Users\user\Desktop\delete\script log.txt"