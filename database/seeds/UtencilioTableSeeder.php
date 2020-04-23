<?php

use Illuminate\Database\Seeder;

class UtencilioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Utencilio::class,4)->create();
    }
}
