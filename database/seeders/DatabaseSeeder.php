<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin_ea']);
        Role::create(['name' => 'admin']);
        $users = [
            [
                'user' => [
                    'name' => 'admin',
                    'lastname' => 'EA',
                    'email' => 'admin@mail.com',
                    'password' => bcrypt('123')
                ],
                'role' => 'admin_ea'
            ],
        ];
        foreach ($users as $data) {
            $user = User::create($data['user']);
            $user->email_verified_at = now();
            $user->save();
            $user->assignRole($data['role']);            
        }
    }
}
