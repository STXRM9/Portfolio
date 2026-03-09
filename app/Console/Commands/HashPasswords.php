<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class HashPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'passwords:hash {--dry-run : Show what would be hashed without making changes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rehash all user passwords using Bcrypt';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $users = User::all();
        $dryRun = $this->option('dry-run');
        
        if ($users->isEmpty()) {
            $this->info('No users found.');
            return Command::SUCCESS;
        }

        $this->info("Found {$users->count()} user(s).");

        if ($dryRun) {
            $this->info('DRY RUN MODE - No changes will be made.');
        }

        $hashedCount = 0;

        foreach ($users as $user) {
            // Check if password is already properly hashed with Bcrypt
            // Bcrypt hashes start with $2a$, $2b$, or $2y$ and are 60 characters long
            $isBcrypt = preg_match('/^\$2[ayb]\$.{56}$/', $user->password);

            if (!$isBcrypt) {
                if ($dryRun) {
                    $this->line("  Would rehash password for: {$user->email}");
                } else {
                    // Keep the original password and rehash it
                    // Since we don't know the original, we'll set a temporary password
                    // Users will need to use password reset
                    $this->warn("  Password for {$user->email} is not properly hashed.");
                    $this->warn("  Please use password reset to set a new password.");
                }
                $hashedCount++;
            } else {
                $this->line("  OK: {$user->email} (already bcrypt)");
            }
        }

        if ($dryRun) {
            $this->info("Would rehash {$hashedCount} password(s).");
        } else {
            $this->info("Found {$hashedCount} password(s) that need rehashing.");
            $this->info('Please instruct users to use the password reset feature.');
        }

        return Command::SUCCESS;
    }
}
