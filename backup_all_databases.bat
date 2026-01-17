@echo off
echo Starting database backup...
set MYSQL_BIN=C:\xampp\mysql\bin
set BACKUP_DIR=C:\xampp\htdocs\urbana\database_backups
set DATE=%date:~-4,4%%date:~-7,2%%date:~-10,2%_%time:~0,2%%time:~3,2%%time:~6,2%
set DATE=%DATE: =0%

mkdir "%BACKUP_DIR%" 2>nul

echo Backing up user databases...
%MYSQL_BIN%\mysqldump.exe -u root adventonepal > "%BACKUP_DIR%\adventonepal_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root mevs > "%BACKUP_DIR%\mevs_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root prime_service_nepal > "%BACKUP_DIR%\prime_service_nepal_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serahub > "%BACKUP_DIR%\serahub_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serahubit > "%BACKUP_DIR%\serahubit_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serait > "%BACKUP_DIR%\serait_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serajobc > "%BACKUP_DIR%\serajobc_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serajobc_englishexpress > "%BACKUP_DIR%\serajobc_englishexpress_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serajobc_main > "%BACKUP_DIR%\serajobc_main_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serajobc_seraedu > "%BACKUP_DIR%\serajobc_seraedu_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root serajobc_serahubit > "%BACKUP_DIR%\serajobc_serahubit_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root sumanai_academy > "%BACKUP_DIR%\sumanai_academy_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root test > "%BACKUP_DIR%\test_%DATE%.sql"
%MYSQL_BIN%\mysqldump.exe -u root urbana > "%BACKUP_DIR%\urbana_%DATE%.sql"

echo.
echo ========================================
echo Backup completed!
echo Location: %BACKUP_DIR%
echo ========================================
pause
