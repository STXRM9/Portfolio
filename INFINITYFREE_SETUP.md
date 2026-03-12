# InfinityFree Database Setup Guide

This guide will help you set up your MySQL database on InfinityFree and connect your Laravel application.

## Prerequisites
- An InfinityFree account
- Your application files uploaded to InfinityFree

---

## Step 1: Login to InfinityFree Control Panel

1. Go to: **https://if0.infinityfree.com**
2. Enter your **Username** and **Password**
3. Click **Login**

---

## Step 2: Access MySQL Databases Section

1. In the control panel dashboard, look for the **"MySQL Databases"** icon
2. Click on it to open the MySQL management page

![MySQL Databases Location](https://i.imgur.com/example.png)

---

## Step 3: Create a New MySQL Database

On the MySQL Databases page:

1. Look for the **"Create New MySQL Database"** section
2. Enter the database name:
   ```
   sureprofile
   ```
3. The full database name will become: `if0_41344608_sureprofile`
4. Enter and confirm your password:
   ```
   Jasonduru2009
   ```
5. Click **"Create Database"**

---

## Step 4: Note Your MySQL Credentials

After creating the database, you'll see the following information:

| Setting | Value |
|---------|-------|
| **MySQL Host** | sql206.infinityfree.com |
| **MySQL Port** | 3306 |
| **MySQL Username** | if0_41344608 |
| **MySQL Database Name** | if0_41344608_sureprofile |
| **MySQL Password** | Jasonduru2009 |

**Important:** Write these down or keep them handy.

---

## Step 5: Configure IP Whitelist (Important!)

InfinityFree requires you to whitelist IP addresses that can access your MySQL database.

1. In the MySQL Databases page, look for **"Remote MySQL"** or **"IP Management"** section
2. Add your IP address:
   - To find your IP, search "what is my IP" on Google
   - Your IP looks like: `xxx.xxx.xxx.xxx`
3. Add the following IPs to the allowed list:
   ```
   0.0.0.0   (allows all IPs - for testing only)
   ```
   Or your specific IP address

4. Click **"Add"** or **"Save"**

---

## Step 6: Update Your .env File

Make sure your `.env` file on the server has these exact values:

```env
DB_CONNECTION=mysql
DB_HOST=sql206.infinityfree.com
DB_PORT=3306
DB_DATABASE=if0_41344608_sureprofile
DB_USERNAME=if0_41344608
DB_PASSWORD=Jasonduru2009
```

---

## Step 7: Upload Updated .env to Server

1. Edit your local `.env` file (already updated with correct credentials)
2. Upload it to your InfinityFree hosting using:
   - **FTP Client** (FileZilla, WinSCP)
   - Or **Online File Manager** in InfinityFree control panel

---

## Step 8: Clear Laravel Config Cache

After uploading the updated `.env` file, you need to clear Laravel's cached configuration:

### Option A: Using SSH (if available)
```bash
php artisan config:clear
php artisan cache:clear
php artisan migrate
```

### Option B: Using PHP Code
Create a file called `clear-cache.php` in your public folder:

```php
<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Clear config cache
config(['app.debug' => true]);
echo "Cache cleared!";

// Run migrations
try {
    \Illuminate\Support\Facades\DB::connection()->getPdo();
    echo "\nDatabase connected successfully!";
} catch (\Exception $e) {
    echo "\nDatabase connection failed: " . $e->getMessage();
}
```

Upload this file and access it via browser: `yourdomain.com/clear-cache.php`

---

## Step 9: Run Database Migrations

Once connected, you need to create the database tables:

### Option A: Using SSH
```bash
php artisan migrate --force
```

### Option B: Create a migration runner file
Create `migrate.php` in your public folder:

```php
<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    // Test connection
    $pdo = \Illuminate\Support\Facades\DB::connection()->getPdo();
    echo "Connected to database successfully!<br>";
    
    // Run migrations
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true]);
    echo "Migrations completed!<br>";
    echo nl2br(\Illuminate\Support\Facades\Artisan::output());
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

Upload and access: `yourdomain.com/migrate.php`

---

## Troubleshooting

### Error: "Access denied for user"
1. **Check password** - Make sure the password in `.env` matches exactly
2. **Check IP whitelist** - Your IP must be added to Remote MySQL
3. **Check database name** - Must be exactly `if0_41344608_sureprofile`

### Error: "Unknown database"
- The database `if0_41344608_sureprofile` doesn't exist
- Create it in MySQL Databases section first

### Error: "Connection timed out"
- Firewall might be blocking the connection
- Check that your IP is whitelisted

---

## Alternative: Use SQLite Instead

If MySQL continues to have issues, you can switch to SQLite:

1. Update `.env`:
```env
DB_CONNECTION=sqlite
```

2. Create an empty database file:
```bash
touch database/database.sqlite
```

3. Upload the empty SQLite file to your server

---

## Need More Help?

If you're still having issues:
1. Check InfinityFree's official documentation: https://infinityfree.netlify.app/
2. Contact InfinityFree support through their control panel
3. Search for your specific error message online

---

## Your Current Configuration Summary

Use these exact values in your InfinityFree `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=sql206.infinityfree.com
DB_PORT=3306
DB_DATABASE=if0_41344608_sureprofile
DB_USERNAME=if0_41344608
DB_PASSWORD=Jasonduru2009
```
