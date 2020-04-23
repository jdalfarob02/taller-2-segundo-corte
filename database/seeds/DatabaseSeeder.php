<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ElectrodomesticoTableSeeder::class);
        $this->call(JardinTableSeeder::class);
        $this->call(UtencilioTableSeeder::class);

    }
}
