<?php
/**
 * Database Migration Runner for InfinityFree
 * 
 * Upload this file to your public folder and access via:
 * https://yourdomain.com/migrate.php
 * 
 * WARNING: Delete this file after use for security!
 */

// Bootstrap Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "<h1>🔄 Database Migration Runner</h1>";
echo "<pre style='background:#f4f4f4;padding:15px;border-radius:5px;'>";

try {
    // Test database connection first
    echo "📡 Testing database connection...\n";
    
    $pdo = \Illuminate\Support\Facades\DB::connection()->getPdo();
    
    if ($pdo) {
        echo "✅ Database connected successfully!\n\n";
        
        // Show current database info
        echo "📊 Database Info:\n";
        echo "   Host: " . config('database.connections.mysql.host') . "\n";
        echo "   Database: " . config('database.connections.mysql.database') . "\n";
        echo "   Username: " . config('database.connections.mysql.username') . "\n\n";
        
        // Check if tables exist
        echo "📋 Checking existing tables...\n";
        $tables = \Illuminate\Support\Facades\DB::select('SHOW TABLES');
        
        if (empty($tables)) {
            echo "   No tables found. Running migrations...\n\n";
            
            // Run migrations
            echo "🚀 Running migrations...\n";
            \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true]);
            $output = \Illuminate\Support\Facades\Artisan::output();
            echo $output . "\n";
            
            echo "✅ Migrations completed successfully!\n";
        } else {
            echo "   Found " . count($tables) . " existing table(s):\n";
            foreach ($tables as $table) {
                $tableName = array_values((array)$table)[0];
                echo "   - $tableName\n";
            }
            echo "\n";
            
            // Option to refresh
            echo "🔄 Tables already exist. To refresh (delete all data and recreate), add ?refresh=1 to URL\n";
            
            if (isset($_GET['refresh']) && $_GET['refresh'] == '1') {
                echo "\n🔄 Refreshing migrations (this will delete all data!)...\n";
                \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true, '--seed' => true]);
                $output = \Illuminate\Support\Facades\Artisan::output();
                echo $output . "\n";
                echo "✅ Database refreshed successfully!\n";
            }
        }
        
        // Seed the database if requested
        if (isset($_GET['seed']) && $_GET['seed'] == '1') {
            echo "\n🌱 Running database seeders...\n";
            \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
            $output = \Illuminate\Support\Facades\Artisan::output();
            echo $output . "\n";
            echo "✅ Database seeded successfully!\n";
        }
    }
    
} catch (\Illuminate\Database\QueryException $e) {
    echo "❌ Database Error: " . $e->getMessage() . "\n\n";
    
    // Provide helpful error information
    $errorCode = $e->getCode();
    
    if ($errorCode == '1045') {
        echo "🔧 Solution:\n";
        echo "   1. Check your password in .env file\n";
        echo "   2. Make sure IP is whitelisted in InfinityFree MySQL settings\n";
        echo "   3. Verify database username and name are correct\n";
    } elseif ($errorCode == '1049') {
        echo "🔧 Solution:\n";
        echo "   The database doesn't exist!\n";
        echo "   Create database 'if0_41344608_sureprofile' in InfinityFree control panel\n";
    } elseif ($errorCode == '2002') {
        echo "🔧 Solution:\n";
        echo "   Cannot connect to MySQL server!\n";
        echo "   Check if MySQL host is correct: sql206.infinityfree.com\n";
    }
    
} catch (\Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}

echo "</pre>";

echo "<hr>";
echo "<h3>Quick Links:</h3>";
echo "<ul>";
echo "<li><a href='?refresh=1'>🔄 Refresh Database (delete all data)</a></li>";
echo "<li><a href='?seed=1'>🌱 Run with Seed Data</a></li>";
echo "</ul>";

echo "<p><strong>⚠️ Security Warning:</strong> Delete this file after use!</p>";
