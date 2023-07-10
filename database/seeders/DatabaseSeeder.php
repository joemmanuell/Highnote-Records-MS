<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\artist;
use App\Models\contract;
use App\Models\event;
use App\Models\merchandise;
use App\Models\musiccatalogues;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\artist::User(10)->create();
        artist::factory(7)->create();
        contract::factory(7)->create();
        event::factory(7)->create();
        merchandise::factory(7)->create();
        musiccatalogues::factory(7)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
