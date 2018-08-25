@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Apps\xampp\hypersonic\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Apps\xampp\ingres\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\ingres\scripts\ctl.bat START)
if exist C:\Apps\xampp\mysql\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\mysql\scripts\ctl.bat START)
if exist C:\Apps\xampp\postgresql\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\postgresql\scripts\ctl.bat START)
if exist C:\Apps\xampp\apache\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\apache\scripts\ctl.bat START)
if exist C:\Apps\xampp\openoffice\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\openoffice\scripts\ctl.bat START)
if exist C:\Apps\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\apache-tomcat\scripts\ctl.bat START)
if exist C:\Apps\xampp\resin\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\resin\scripts\ctl.bat START)
if exist C:\Apps\xampp\jboss\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\jboss\scripts\ctl.bat START)
if exist C:\Apps\xampp\jetty\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\jetty\scripts\ctl.bat START)
if exist C:\Apps\xampp\subversion\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Apps\xampp\lucene\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\lucene\scripts\ctl.bat START)
if exist C:\Apps\xampp\third_application\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Apps\xampp\third_application\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\third_application\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\lucene\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Apps\xampp\subversion\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\subversion\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\jetty\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\jetty\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\hypersonic\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\jboss\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\jboss\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\resin\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\resin\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Apps\xampp\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\openoffice\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\openoffice\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\apache\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\apache\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\ingres\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\ingres\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\mysql\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\mysql\scripts\ctl.bat STOP)
if exist C:\Apps\xampp\postgresql\scripts\ctl.bat (start /MIN /B C:\Apps\xampp\postgresql\scripts\ctl.bat STOP)

:end

