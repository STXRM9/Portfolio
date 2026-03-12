<?php
/**
 * Quick Database Fix & Config Clear
 * 
 * Upload to public folder and access:
 * https://yourdomain.com/fix-db.php
 * 
 * WARNING: Delete after use!
 */

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "<h1>🔧 Database Fix Tool</h1>";
echo "<pre style='background:#1e1e1e;color:#00ff00;padding:20px;border-radius:8px;font-family:monospace;'>";

try {
    // Clear all caches
    echo "🧹 Clearing caches...\n";
    
    // Clear config cache
    if (file_exists(base_path('bootstrap/cache/config.php'))) {
        unlink(base_path('bootstrap/cache/config.php'));
        echo "   ✅ Removed config cache\n";
    }
    
    // Clear route cache
    if (file_exists(base_path('bootstrap/cache/routes.php'))) {
        unlink(base_path('bootstrap/cache/routes.php'));
        echo "   ✅ Removed route cache\n";
    }
    
    // Clear view cache
    $viewCache = glob(base_path('storage/framework/views/*.php'));
    foreach ($viewCache as $file) {
        if (is_file($file) && basename($file) !== '.gitignore') {
            unlink($file);
        }
    }
    echo "   ✅ Cleared view cache\n";
    
    echo "\n📡 Testing database connection...\n";
    
    // Test connection
    \Illuminate\Support\Facades\DB::connection()->getPdo();
    
    echo "   ✅ Connected to MySQL!\n";
    echo "\n📊 Current Configuration:\n";
    echo "   Host: " . env('DB_HOST') . "\n";
    echo "   Database: " . env('DB_DATABASE') . "\n";
    echo "   Username: " . env('DB_USERNAME') . "\n";
    
    // Check tables
    $tables = \Illuminate\Support\Facades\DB::select('SHOW TABLES');
    echo "\n📋 Database Tables (" . count($tables) . "):\n";
    
    if (count($tables) > 0) {
        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];
            $count = \Illuminate\Support\Facades\DB::table($tableName)->count();
            echo "   ✓ $tableName ($count rows)\n";
        }
    } else {
        echo "   ⚠️ No tables found!\n";
        echo "   Run migrations to create tables.\n";
    }
    
    echo "\n🎉 All checks passed!\n";
    
} catch (\Illuminate\Database\QueryException $e) {
    echo "❌ DATABASE CONNECTION FAILED!\n\n";
    echo "Error: " . $e->getMessage() . "\n\n";
    
    $errorCode = $e->getErrorCode() ?: $e->getCode();
    
    switch ($errorCode) {
        case 1045:
            echo "🔴 Cause: Wrong password or user not allowed\n";
            echo "🔧 Fix:\n";
            echo "   1. Check DB_PASSWORD in .env\n";
            echo "   2. Add your IP to Remote MySQL in InfinityFree panel\n";
            break;
        case 1049:
            echo "🔴 Cause: Database doesn't exist\n";
            echo "🔧 Fix:\n";
            echo "   1. Create database 'if0_41344608_sureprofile' in InfinityFree\n";
            break;
        case 2002:
            echo "🔴 Cause: Cannot connect to MySQL server\n";
            echo "🔧 Fix:\n";
            echo "   1. Check DB_HOST is 'sql206.infinityfree.com'\n";
            break;
        default:
            echo "🔴 Error Code: $errorCode\n";
    }
    
} catch (\Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}

echo "</pre>";

echo "<div style='background:#fff3cd;padding:15px;border-radius:5px;margin-top:20px;'>";
echo "<h3>⚠️ Security Notice</h3>";
echo "<p>Please delete these files after use:</p>";
echo "<ul>";
echo "<li><code>/public/migrate.php</code></li>";
echo "<li><code>/public/fix-db.php</code></li>";
echo "</ul>";
echo "</div>";
