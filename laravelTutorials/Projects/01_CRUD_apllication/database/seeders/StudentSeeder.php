<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //to run the faker again and again

        $faker = Faker::create();
        for($i = 1; $i <=5; $i++){
            $student = new Student;

			$student->student_name = $faker->name;
			$student->student_email = $faker->email;
			$student->student_gender = 'Male';
			//$student->student_image = $faker->image;
			$student->student_image = fake()->imageUrl($width=400, $height=400);

            $student->Save();
        }
    }
}
