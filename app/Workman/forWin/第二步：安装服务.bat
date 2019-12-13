REM: install.bat for workerman-chat-for-win
@echo off

set cxDir=%~dp0
set wraper=%cxDir%srvany.exe
set appDir=%cxDir%\
set regDir=HKEY_LOCAL_MACHINE\SYSTEM\ControlSet001\Services\
set phpDir=C:\wamp64\bin\php\php7.1.22\

set cxPHP=%phpDir%php.exe

REM ########install workman_register ########
set cxSrv=workman_register
set cxApp=%appDir%start_register.php

set cxReg=%regDir%%cxSrv%\Parameters\
instsrv %cxSrv% %wraper%
reg add %cxReg% /v AppDirectory /t REG_SZ /d "%phpDir%" /f
reg add %cxReg% /v Application /t REG_SZ /d "%cxPHP%" /f 
reg add %cxReg% /v AppParameters /t REG_SZ /d "%cxApp%" /f

REM ######## install workman_gateway ########
set cxSrv=workman_gateway
set cxApp=%appDir%start_gateway.php

set cxReg=%regDir%%cxSrv%\Parameters\
instsrv %cxSrv% %wraper%
reg add %cxReg% /v AppDirectory /t REG_SZ /d "%phpDir%" /f
reg add %cxReg% /v Application /t REG_SZ /d "%cxPHP%" /f 
reg add %cxReg% /v AppParameters /t REG_SZ /d "%cxApp%" /f

REM ######## install workman_business ########
set cxSrv=workman_business
set cxApp=%appDir%start_businessworker.php

set cxReg=%regDir%%cxSrv%\Parameters\
instsrv %cxSrv% %wraper%
reg add %cxReg% /v AppDirectory /t REG_SZ /d "%phpDir%" /f
reg add %cxReg% /v Application /t REG_SZ /d "%cxPHP%" /f 
reg add %cxReg% /v AppParameters /t REG_SZ /d "%cxApp%" /f