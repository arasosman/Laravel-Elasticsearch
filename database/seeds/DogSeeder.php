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
    public function run(): void
    {
        $dogs = factory(App\Dog::class, 100000)->make()->toArray();
        foreach ($dogs as $dog) {
            Dog::create($dog);
        }
    }
}
