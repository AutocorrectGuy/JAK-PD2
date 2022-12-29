@echo off

set cmd=cmd.exe /k
set PORT_PHP=3001
set PORT_LIVE_SERVER=5500
set DOMAIN_NAME=test123

:: run php server on port 3001
start "php server" %cmd% "cd src && php -S localhost:%PORT_PHP%"

:: runs live server on port 5500
start "live server" %cmd% "yarn live-server --no-browser --port=%PORT_LIVE_SERVER%"

:: runs tailwindcss watcher
start "Tailwindcss watcher" %cmd% "yarn tailwind"

:: opens chrome browser on php server port
start chrome "http://localhost:%PORT_PHP%"

:: starts mysql process (if not started previously)
net start mysql

:: starts localtunnel
lt --port %PORT_PHP% --subdomain %DOMAIN_NAME%