<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Generator as Faker;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
          $newTeacher = new Teacher();
          $newTeacher->name = $faker->name;
          $newTeacher->lastname = $faker->lastName;
          $newTeacher->age = $faker->numberBetween($min = 18, $max = 70);
          $newTeacher->subject = $faker->randomElement($subjects = [
            'Math',
            'I.T.',
            'Story',
            'Geography',
            'English'
          ]);
          $newTeacher->save();
        }
    }
}
