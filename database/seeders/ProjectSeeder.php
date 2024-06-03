<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $new_project = new Project();
            $new_project->project_title = $faker->sentence(3);
            $new_project->project_description = $faker->text();        
            $new_project->github_url = $faker->url();
            $new_project->save();   
        }   
    }
}
