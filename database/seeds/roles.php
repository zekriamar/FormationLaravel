<?php

use Illuminate\Database\Seeder;
use App\Role;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert(['name'=>"Admin"]);
        Role::insert(['name'=>"Editeur" ]);
        Role::insert(['name'=>"Auteur" ]);
        Role::insert(['name'=>"Visiteur"]);

        DB::table('user_role')->insert([
            
            'user_id'=>1,
            'role_id'=>1,
            ]);
        DB::table('user_role')->insert([
            
            'user_id'=>2,
            'role_id'=>2,
            ]);

        // $roles=[]
        // foreach($roles->$role){

        // }
    }
}
