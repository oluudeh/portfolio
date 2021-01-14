<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'admin@portfolio.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ];
        User::create($data);
    }
}
