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
        $technologies = [
            'html' => '#e34c26',
            'css' => '#264de4',
            'js' => '#f0db4f',
            'php' => '#8993be',
            'mysql' => '#00758f'
        ];

        foreach($technologies as $technology => $color){
            $newTech = new Technology();

            $newTech->title = $technology;
            $newTech->color = $color;

            $newTech->save();

        }

    }
}
