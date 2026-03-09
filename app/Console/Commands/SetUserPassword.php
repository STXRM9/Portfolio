<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class SetUserPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:set-password {email : The user email} {password : The new password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set a new password for a user with Bcrypt hashing';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->error("User with email {$email} not found.");
            return Command::FAILURE;
        }

        $user->password = Hash::make($password);
        $user->save();

        $this->info("Password for {$email} has been updated with Bcrypt hashing.");
        $this->info("Password hash: {$user->password}");

        return Command::SUCCESS;
    }
}
