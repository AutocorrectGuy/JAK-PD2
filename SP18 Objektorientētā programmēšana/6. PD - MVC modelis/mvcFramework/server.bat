@echo off

:: Start PHP server
start cmd.exe /c "cd src/public && php -S localhost:3000"

:: Start Tailwindcss watcher
start cmd.exe /c "npm run tailwind"

:: Open new Chrome window with landing page
start chrome "http://localhost:3000/"