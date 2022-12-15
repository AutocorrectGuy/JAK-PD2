@echo off

set cmd=cmd.exe /k

set PORT_PHP=3001
set PORT_LIVE_SERVER=5500

:: run php server on port 3001
start "php server" %cmd% "cd src && php -S 0.0.0.0:%PORT_PHP%"

:: runs live server on port 5500
start "live server" %cmd% "yarn live-server --no-browser --port=%PORT_LIVE_SERVER%"

:: runs tailwindcss watcher
start "Tailwindcss watcher" %cmd% "yarn tailwind"

:: opens chrome browser on php server port
start chrome "http://localhost:%PORT_PHP%"

:: start mysql process and try to log in
net start mysql