Get-content C:\acm\ListofInstanceid.txt |ForEach-Object {
 if($_ -match $regex) {
 Start-EC2Instance -InstanceId $_
}
}
