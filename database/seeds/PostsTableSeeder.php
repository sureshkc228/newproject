<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        //reset the post table
        $posts=[];
        $faker=Factory::create();
        for($i=1;$i<=10;$i++)
        {
        	$image="post_Image_".rand(1,5).".jpg";
        	$date=date("Y-m-d H:M:S",strtotime("2018-07-18 08:00:00+{$i}days"));
        	$posts[]=[
        		'author_id'=>rand(1,3),
        		'title'=>$faker->sentence(rand(8,12)),
        		'excerpt'=>$faker->text(rand(250,300)),
        		'body'=>$faker->paragraphs(rand(10,15),true),
        		'slug'=>$faker->slug()
        	];
        }
        
        DB::table('posts')->insert($posts);
    }
}
