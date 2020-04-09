<?php

use Illuminate\Database\Seeder;

class options extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\options::class,30)->create();
    }
}
