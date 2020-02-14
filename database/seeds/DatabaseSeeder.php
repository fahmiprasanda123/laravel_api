<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = Faker\Factory::create(); //import library faker

        $limit = 20; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement($array = array('male','female')), 
            ]);
        }
    }
}