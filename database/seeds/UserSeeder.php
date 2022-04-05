<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $user = new User();
            $user->name = $faker->word();
            $user->email = $faker->email();
            $user->password = Crypt::encryptString($faker->password());
            $user->save();
        }
    }
}
