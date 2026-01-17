# Complete PHP Upgrade Guide for XAMPP

## Prerequisites
✅ Database backups created at: `C:\xampp\htdocs\urbana\database_backups\`

## Step-by-Step Instructions

### Step 1: Stop XAMPP Services
1. Open XAMPP Control Panel
2. Click "Stop" on Apache
3. Click "Stop" on MySQL

### Step 2: Download PHP 8.2
1. Visit: https://windows.php.net/download/
2. Look for **PHP 8.2.x** (latest version)
3. Download: **VS16 x64 Thread Safe** (ZIP file)
4. File size should be around 30-40 MB

### Step 3: Backup Current PHP
1. Navigate to `C:\xampp\`
2. Rename folder `php` to `php_backup_old`
   - Right-click → Rename
   - Or use command: `Rename-Item C:\xampp\php C:\xampp\php_backup_old`

### Step 4: Install New PHP
1. Extract the downloaded ZIP file
2. Rename extracted folder to `php`
3. Move it to `C:\xampp\php`

### Step 5: Configure PHP
1. Go to `C:\xampp\php_backup_old\`
2. Copy `php.ini` file
3. Paste it into `C:\xampp\php\`
4. Open `C:\xampp\php\php.ini` in Notepad
5. Find this line (around line 730):
   ```
   ;extension=openssl
   ```
6. Remove the semicolon:
   ```
   extension=openssl
   ```
7. Save the file

### Step 6: Update Apache Configuration (Important!)
1. Open `C:\xampp\apache\conf\extra\httpd-xampp.conf` in Notepad
2. Find lines that look like:
   ```
   LoadFile "C:/xampp/php/php8ts.dll"
   LoadModule php_module "C:/xampp/php/php8apache2_4.dll"
   ```
3. Change to match your new PHP version (should still be php8):
   ```
   LoadFile "C:/xampp/php/php8ts.dll"
   LoadModule php_module "C:/xampp/php/php8apache2_4.dll"
   ```

### Step 7: Restart XAMPP
1. Open XAMPP Control Panel (as Administrator)
2. Click "Start" on Apache
3. Click "Start" on MySQL

### Step 8: Verify PHP Version
Open PowerShell and run:
```powershell
C:\xampp\php\php.exe -v
```
You should see: `PHP 8.2.x`

### Step 9: Run Laravel Urbana Project
```powershell
cd C:\xampp\htdocs\urbana
php artisan migrate
php artisan serve
```

## Troubleshooting

### If Apache won't start:
1. Check XAMPP Control Panel logs
2. Ensure no other programs using port 80/443
3. Run XAMPP as Administrator

### If PHP commands fail:
1. Verify PHP is at `C:\xampp\php\`
2. Check `php.ini` exists
3. Ensure path doesn't have spaces

### If database connection fails:
1. Verify MySQL is running in XAMPP
2. Check `.env` file settings
3. Database password should be empty for root

## Rollback Plan (If Something Goes Wrong)

1. Stop Apache and MySQL
2. Delete `C:\xampp\php`
3. Rename `C:\xampp\php_backup_old` back to `php`
4. Restart services

## Contact Points
- Your databases are safe in MySQL (completely separate from PHP)
- Backups located at: `C:\xampp\htdocs\urbana\database_backups\`
