REM: install.bat for workerman-chat-for-win

@echo off
set regDir=HKEY_LOCAL_MACHINE\SYSTEM\ControlSet001\Services\

reg delete %regDir%workman_register\Parameters
instsrv.exe workman_register remove

reg delete %regDir%workman_gateway\Parameters
instsrv.exe workman_gateway remove

reg delete %regDir%workman_business\Parameters
instsrv.exe workman_business remove