<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $tipo = new \App\Models\Tipo([
            'nombre' => 'Mensual',
            'duracion' => 30,
            'num_usos' => 96,
            'cupo' => 25,
        ]);
        $tipo->save();
        $tipo = new \App\Models\Tipo([
            'nombre' => 'Semestral',
            'duracion' => 180,
            'num_usos' => 576,
            'cupo' => 50
        ]);
        $tipo->save();
        $tipo = new \App\Models\Tipo([
            'nombre' => 'Anual',
            'duracion' => 365,
            'num_usos' => 1052,
            'cupo' => 80
        ]);
        $tipo->save();

        $persona = new \App\Models\Persona([
            'nombre' => 'Persona1'
        ]);
        $persona->save();
        $persona = new \App\Models\Persona([
            'nombre' => 'Persona2'
        ]);
        $persona->save();
        $persona = new \App\Models\Persona([
            'nombre' => 'Persona3'
        ]);
        $persona->save();

        $pase = new \App\Models\Pase([
            'tipo_id'=>1,
            'persona_id'=>1,
            'creado'=>'2022-01-01 00:00:00'
        ]);
        $pase->save();
        $pase = new \App\Models\Pase([
            'tipo_id'=>2,
            'persona_id'=>2,
            'creado'=>'2022-01-01 00:00:00'
        ]);
        $pase->save();
        $pase = new \App\Models\Pase([
            'tipo_id'=>3,
            'persona_id'=>3,
            'creado'=>'2022-01-01 00:00:00'
        ]);
        $pase->save();


    }
}
