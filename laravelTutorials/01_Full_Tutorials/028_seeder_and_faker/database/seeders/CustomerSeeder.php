<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //// with seeder 
        //$customer = new Customer;
        //$customer->user_name = 'prince';
        //$customer->email = 'ps789650@gmail.com';
		//$customer->gender = 'M';
		//$customer->address = 'ABCD NAGAR';
		//$customer->state = 'punjab';
		//$customer->country = 'india';
		//$customer->dob = now();
		//$customer->password = '12345';
        //$customer->Save();

        //wih faker
        $faker = Faker::create();
        $customer = new Customer;
        $customer->user_name = $faker->name;
        $customer->email = $faker->email;
		$customer->gender = 'M';
		$customer->address = $faker->address;
		$customer->state = $faker->state;
		$customer->country = $faker->Country;
		$customer->dob = $faker->date;
		$customer->password = $faker->password;
        $customer->Save();

        //to run the faker again and again

        $faker = Faker::create();
        for($i = 1; $i <=100; $i++){
            $customer = new Customer;
            $customer->user_name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = 'M';
            $customer->address = $faker->address;
            $customer->state = $faker->state;
            $customer->country = $faker->Country;
            $customer->dob = $faker->date;
            $customer->password = $faker->password;
            $customer->Save();
        }
    }
}
