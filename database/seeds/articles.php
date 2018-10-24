<?php

use Illuminate\Database\Seeder;
use App\Article;
use Carbon\Carbon;

class articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        $data = [];

        $users=App\User::pluck('id')->toArray();//permet de retourner les id de la table et les stock dans une table
        
        for ($i = 1; $i <= 100 ; $i++) {
            array_push($data, [
            'name'=>$faker->sentence,
            'body'=>$faker->realText(2000) ,
            'user_id'=>$faker->randomElement($users),
            'published_at'=>$faker->datetime(),

            ]);
        }
        Article::insert($data);
    }
}
