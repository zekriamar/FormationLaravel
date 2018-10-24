<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');//fr_FR pour que le résultat en français
        
        $data = [];
        
        for ($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' =>bcrypt('123456'),
                'role'     => 10,
                'bio'      => $faker->realText(),
            ]);
        }
        
        User::insert($data);
    }
}
