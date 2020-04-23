<?php

use Illuminate\Database\Seeder;

class JardinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Jardin::class,4)->create();
    }
}
