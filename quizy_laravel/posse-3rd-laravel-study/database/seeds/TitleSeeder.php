<?php

use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('titles')->insert([
            
                [    
                    'title' => '東京の難読地名クイズ',
                ],
               
                [    
                    'title' => '広島県の難読地名クイズ',
                ],
            ]);
        }
    }
}
