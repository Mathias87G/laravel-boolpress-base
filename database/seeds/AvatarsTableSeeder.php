<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Avatar;
use App\User;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $users = User::all();
      foreach ($users as $user) {
        $newAvatar = new Avatar();
        $newAvatar->telefono = $faker->phoneNumber;
        $newAvatar->avatar = $faker->imageUrl(640,480);
        $newAvatar->user_id = $user->id;
        $newAvatar->save();
      }
    }
}
