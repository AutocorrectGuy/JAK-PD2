
set PHP_PORT=3001
set PHP_DOMAIN=http://127.0.0.1

:: start Laravel php server
start cmd.exe /c "php artisan serve --port=%PHP_PORT%"

:: opens chrome on selected port and domain
start chrome "%PHP_DOMAIN%:%PHP_PORT%/"