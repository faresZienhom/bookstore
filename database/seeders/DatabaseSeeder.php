<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Slider;
use App\Models\Contacts;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        $this->call([
            SliderSeeder::class,
        ]);

        $this->call([
            BannerSeeder::class,
        ]);
        $this->call([
            CategoriesSeeder::class,
        ]);
        $this->call([
            ProductSeeder::class,
        ]);
        $this->call([
            ContactsSeeder::class
        ]);


    }
}
