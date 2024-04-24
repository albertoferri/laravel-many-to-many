<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['html', 'css', 'js', 'php', 'mysql'];

        foreach($technologies as $technology){
            $newTech = new Technology();

            $newTech->title = $technology;

            $newTech->save();

        }

    }
}
