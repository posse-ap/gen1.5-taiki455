<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('users')->insert([
            
                [    
                    'name' => 'だんのさん',
                    'email' => 'dannotaiki1113@gmail.com',
                    'email_verified_at' => '2022:01:24',
                    'password' => 'yes',
                ],
               
            ]);
        }
    }
}
