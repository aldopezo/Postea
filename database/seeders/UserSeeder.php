<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 20; $i++){
            DB::table('usuarios')->insert(array(
                'nombre' => 'Juan ', 'Pedro ', 'Rodrigo ', 'Enrique ', 'Paola ', 'Carlos ', 'Aldo ', 'Valeria ', 'Gabriela ', 'Luis ', 'Franco '.$i,
                'cancion' => 'ss ', 'sd ', 'rr ', 'oo ', 'ww ', 'se ', 'csa ', 'vfd ', 'ss ', 'lo'.$i,
            ))
        }
        $this->command->info('La tabla esta llenandose')
    }
}
