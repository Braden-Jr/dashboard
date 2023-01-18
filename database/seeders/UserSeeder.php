<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'status' => 'Active',
            'role_id' => '1',
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'Client',
            'email' => 'Client@gmail.com',
            'status' => 'Active',
            'role_id' => '2',
        ]);
    }
}
