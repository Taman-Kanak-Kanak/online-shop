<?php

namespace Database\Seeders;

use Database\Factories\AdminFactory;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminFactory::new()->count(5)->create();
    }
}
