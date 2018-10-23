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
        
        for ($i = 1; $i <= 100 ; $i++) {
            array_push($data,[
            'name'=>$faker->sentence,
            'body'=>$faker->realText(2000) ,     
            'created_at'=>$faker->datetime(),       
            'updated_at'=>$faker->datetime(), 
            ]);
        }        
        Article::insert($data);
    }
}
