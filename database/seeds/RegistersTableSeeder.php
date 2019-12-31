<?php

use Illuminate\Database\Seeder;

class RegistersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Register::class)->create([
            'name'=>'Jared Leto'
        ]);
        factory(App\Register::class)->create([
            'name'=>'Chris Evans'
        ]);
        factory(App\Register::class)->create([
            'name'=>'Robert Downey Jr'
        ]);
    }
}
