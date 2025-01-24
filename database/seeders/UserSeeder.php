<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@test.com',
        //     'password' => Hash::make('12345678')
        // ]);
        
        // for ($i=1; $i <=10 ; $i++) { 
        //     DB::table('users')->insert([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@test.com',
        //         'password' => Hash::make('12345678')
        //     ]);
        // }

        //with faker
        $faker = Faker::create('id_ID'); //set locale
        for ($i=1; $i <=5 ; $i++) { 
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('12345678')
            ]);
        }
    }
}