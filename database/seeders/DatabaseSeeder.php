<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name' => 'Paloma', 'surname1' => 'Babot', 'surname2' => 'León', 'email' => 'palo@gmail.com', 'isAdmin' => false]);
        User::factory()->create(['name' => 'Ana', 'surname1' => 'Rueda', 'surname2' => 'Guiu', 'email' => 'michi@gmail.com', 'isAdmin' => false]);
        User::factory()->create(['name' => 'Esther', 'surname1' => 'De Luque', 'surname2' => 'Zurita', 'email' => 'esther@gmail.com', 'isAdmin' => false]);
        User::factory()->create(['name' => 'Beatriz', 'surname1' => 'De Ávila', 'surname2' => 'Jiménez', 'email' => 'bea@gmail.com', 'isAdmin' => false]);
        User::factory()->create(['name' => 'Adriana', 'surname1' => 'Aguilar', 'surname2' => 'Ruiz', 'email' => 'adriana@gmail.com', 'isAdmin' => false]);
        User::factory()->create(['name' => 'Paula', 'surname1' => 'Ramírez', 'surname2' => 'Agudelo', 'email' => 'paula@gmail.com','isAdmin' => false]);
        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);

        // Recorrer todos los usuarios creados
        User::all()->each(function ($user) {
            // Crear notas para todas las asignaturas y trimestres
            $subjects = ['Matemáticas', 'Lengua', 'Historia', 'Geografía', 'Inglés'];
            for ($trimester = 1; $trimester <= 4; $trimester++) {
                foreach ($subjects as $subject) {
                    for ($exam = 1; $exam <= 3; $exam++) {
                        Grade::factory()->create([
                            'user_id' => $user->id,
                            'grade' => rand(1, 10),
                            'subject' => $subject,
                            'trimester' => $trimester,
                            'exam' => $exam,
                            'schoolYear' => '2022-2023',
                        ]);
                    }
                }
            }
        });
    }
}


