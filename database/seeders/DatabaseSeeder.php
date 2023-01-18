<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\roles::factory()->create([
        //     'id'=>'1',
        //     'name' => 'Administrator',
        // ]);

        // \App\Models\roles::factory()->create([
        //     'id'=>'2',
        //     'name' => 'Client',
        // ]);
        $this->call([
        RolesSeeder::class,
        UserSeeder::class
        ]);
    }
}
