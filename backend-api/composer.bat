@echo OFF
:: in case DelayedExpansion is on and a path contains !
setlocal DISABLEDELAYEDEXPANSION
php -d memory_limit=-1 "%~dp0composer.phar" %*
