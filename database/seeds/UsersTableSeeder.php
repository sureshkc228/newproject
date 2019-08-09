<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
        	[
        	'name'=>"suresh",
        	'email'=>"sureshkc@gamil.com",
        	'password'=>"bcrypt('secret')"
             ],
         [
        	'name'=>"rame",
        	'email'=>"rame@gamil.com",
        	'password'=>"bcrypt('secret')"
           ],
          [
        	'name'=>"hari",
        	'email'=>"hari@gamil.com",
        	'password'=>"bcrypt('secret')"
        ],
        ]);
    }
    }
    

