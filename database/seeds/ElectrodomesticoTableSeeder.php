<?php

use Illuminate\Database\Seeder;

class ElectrodomesticoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Electrodomestico::class,4)->create();
    }
}
