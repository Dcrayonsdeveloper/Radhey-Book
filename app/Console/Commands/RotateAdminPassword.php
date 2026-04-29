<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RotateAdminPassword extends Command
{
    protected $signature = 'admin:rotate-password {email? : Admin email to rotate (defaults to admin@radheybook.com)}';

    protected $description = 'Rotate an admin user password to a strong random value and print it once.';

    public function handle(): int
    {
        $email = $this->argument('email') ?? 'admin@radheybook.com';

        $user = User::where('email', $email)->first();
        if (!$user) {
            $this->error("No user found with email {$email}.");
            return self::FAILURE;
        }
        if (!$user->is_admin) {
            $this->error("User {$email} is not an admin. Aborting.");
            return self::FAILURE;
        }

        $newPassword = Str::random(24);
        $user->password = Hash::make($newPassword);
        $user->save();

        $this->newLine();
        $this->info('-----------------------------------------------------');
        $this->info(' New password (shown ONCE — save it now):');
        $this->newLine();
        $this->line('   ' . $newPassword);
        $this->newLine();
        $this->info('-----------------------------------------------------');
        $this->warn(' Log in immediately and change it from the admin panel.');
        $this->newLine();

        return self::SUCCESS;
    }
}
