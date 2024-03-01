<?php

namespace Database\Seeders;

use App\Models\Star;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Star::factory()->count(50)->create();

        Star::query()->create([
            'name' => 'Romain',
            'surname' => 'Longeron',
            'image_url' => 'https://images.unsplash.com/photo-1549692520-acc6669e2f0c?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'description' => 'Développeur web fullstack, intéressé et créatif, diplômé d\'Epitech.',

            'created_at' => now()->addDay(),
        ]);
    }
}
