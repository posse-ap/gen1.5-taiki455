<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('questions')->insert([
            
                [    
                    'question_number' => 1,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '1.png',
                    'title_id' => '1',
                
                ],
               
                [    
                    'question_number' => 2,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '2.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 3,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '3.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 4,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '4.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 5,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '5.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 6,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '6.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 7,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '7.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 8,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '8.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 9,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '9.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 10,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '10.png',
                    'title_id' => '1',
                
                ],
                [    
                    'question_number' => 11,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '11.png',
                    'title_id' => '2',
                
                ],
                [    
                    'question_number' => 12,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '12.png',
                    'title_id' => '2',
                
                ],
                [    
                    'question_number' => 13,
                    'question_form' => 'この地名はなんて読む？',
                    'img_name' => '13.png',
                    'title_id' => '2',
                
                ],
            ]);
        }
    }
}
