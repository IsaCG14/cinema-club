<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genero_1 = new Genero;
        $genero_1->genero = "Aventura";
        $genero_1->save();

        $genero_2 = new Genero;
        $genero_2->genero = "Accion";
        $genero_2->save();

        $genero_3 = new Genero;
        $genero_3->genero = "Fantasia";
        $genero_3->save();

        $genero_4 = new Genero;
        $genero_4->genero = "Sobrenatural";
        $genero_4->save();

        $genero_5 = new Genero;
        $genero_5->genero = "Terror";
        $genero_5->save();

        $genero_6 = new Genero;
        $genero_6->genero = "Romance";
        $genero_6->save();
    }
}
