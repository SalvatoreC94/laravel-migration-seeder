<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class TrainSeeder extends Seeder
{
    public function run()
{
    \App\Models\Train::factory()->count(50)->create();
}
}
