<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
      $users = User::all();
      for ($i=0; $i < 50; $i++) {
        $newPost = new Post();
        $newPost->title = $faker->text(100);
        $newPost->body = $faker->text(500);
        $newPost->user_id = $users->random()->id;
        $newPost->save();
      }
    }
}
