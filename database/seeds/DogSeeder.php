<?php

use App\Dog;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dogs = factory(App\Dog::class, 10000)->make()->toArray();
        foreach ($dogs as $dog) {
            Dog::create($dog);
        }
    }
}
