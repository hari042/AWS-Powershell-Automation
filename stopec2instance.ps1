Get-content C:\acm\ListofInstanceid.txt |ForEach-Object {
 if($_ -match $regex) {
 Stop-EC2Instance -InstanceId $_

}

}
