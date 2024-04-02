<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = new Project;
        $project->title = 'vue-boolzapp';
        $project->author = 'Mattia Volonterio';
        $project->description = 'Una webapp simile a whatsapp web creata con vue';
        $project->project_link = 'https://github.com/MattiaVolonterio/vue-boolzapp';
        $project->save();
    }
}
