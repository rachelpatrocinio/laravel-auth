<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    
    public function run(Faker $faker): void
    {
        DB::table('projects')->truncate();
        for($i = 0; $i < 10; $i++){
            $new_project = new Project();

            $titles = ['laravel_auth', 'laravel_crud', 'laravel_intro', 'laravel_migration_seeder', 'laravel_preset', 'laravel_model_controller', 'laravel_assets', 'php', 'php_intro', 'php_laravel'];
            $new_project->project_title = $faker->randomElement($titles);
            $new_project->project_description = $faker->text();        
            $new_project->github_url = $faker->url();
            $new_project->save();   
        }   
    }
}
