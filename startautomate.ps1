$taskAction = New-ScheduledTaskAction `
    -Execute 'C:\Windows\SysWOW64\WindowsPowerShell\v1.0\powershell.exe' `
    -Argument '-File c:\acm\startec2instance.ps1'
$taskAction

$taskTrigger = New-ScheduledTaskTrigger -Daily -At 9:10PM
$tasktrigger
$taskName = "Ec2starting"
$description = "start the ec2 instance"
Register-ScheduledTask `
    -TaskName $taskName `
    -Action $taskAction `
    -Trigger $taskTrigger `
    -Description $description