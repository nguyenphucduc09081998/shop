ECHO OFF

TITLE Clear cache on Laravel
:: This scipts only clear Laravel cache on Windows OS.
::Reoptimized class loader:
php artisan optimize

::Clear Cache facade value:
php artisan cache:clear

::Clear Route cache:
php artisan route:cache

::Clear View cache:
php artisan view:clear

::Clear Config cache:
php artisan config:clear
