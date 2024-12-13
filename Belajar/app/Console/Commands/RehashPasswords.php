<?php

namespace App\Console\Commands;

use App\Models\Login;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class RehashPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'passwords:rehash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            // Periksa apakah password sudah di-hash dengan Bcrypt
            if (! Hash::needsRehash($user->password)) {
                $user->password = Hash::make($user->password);
                $user->save();
                $this->info("Password for user {$user->username} has been rehashed.");
            }
        }

        $this->info('All passwords have been rehashed successfully.');
    }
}
