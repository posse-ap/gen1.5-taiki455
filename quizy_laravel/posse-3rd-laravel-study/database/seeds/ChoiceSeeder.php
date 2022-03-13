<?php

use Illuminate\Database\Seeder;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('choices')->insert([
                [    
                    'question_id' => 1,
                    'name' => 'たかなわ',
                    'is_answer' => true,
                 
                ],

                [    
                    'question_id'=> 1,
                    'name' => 'こうわ',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 1,
                    'name' => 'たかわ',
                    'is_answer' => false,
                ],

                [    
                    'question_id' => 2,
                    'name' => 'かめいど',
                    'is_answer' => true,
                 
                ],

                [    
                    'question_id'=> 2,
                    'name' => 'かめど',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 2,
                    'name' => 'かめと',
                    'is_answer' => false,
                ],

                [    
                    'question_id'=> 3,
                    'name' => 'こうじまち',
                    'is_answer' => true,
                ],
               
                [    
                    'question_id'=> 3,
                    'name' => 'おかとまち',
                    'is_answer' => false,
                ],
                [    
                    'question_id' => 3,
                    'name' => 'かゆまち',
                    'is_answer' => false,
                 
                ],

                [    
                    'question_id'=> 4,
                    'name' => 'おかどもん',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 4,
                    'name' => 'ごせいもん',
                    'is_answer' => false,
                ],
                [    
                    'question_id' => 4,
                    'name' => 'おなりもん',
                    'is_answer' => true,
                 
                ],

                [    
                    'question_id'=> 5,
                    'name' => 'とどろき',
                    'is_answer' => true,
                ],
               
                [    
                    'question_id'=> 5,
                    'name' => 'たたりき',
                    'is_answer' => false,
                ],
                [    
                    'question_id' => 5,
                    'name' => 'たたら',
                    'is_answer' => false,
                 
                ],

                [    
                    'question_id'=> 6,
                    'name' => 'しゃくじい',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 6,
                    'name' => 'せきこうい',
                    'is_answer' => false,
                ],
                [    
                    'question_id' => 6,
                    'name' => 'いじい',
                    'is_answer' => true,
                 
                ],

                [    
                    'question_id'=> 7,
                    'name' => 'ざっしき',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 7,
                    'name' => 'ぞうしき',
                    'is_answer' => true,
                ],
                [    
                    'question_id' => 7,
                    'name' => 'ざっしょく',
                    'is_answer' => false,
                 
                ],

                [    
                    'question_id'=>8,
                    'name' => 'みとちょう',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=>8,
                    'name' => 'おかちまち',
                    'is_answer' => true,
                ],
                [    
                    'question_id' =>8,
                    'name' => 'ごしろちょう',
                    'is_answer' => false,
                 
                ],

                [    
                    'question_id'=> 9,
                    'name' => 'ろっこつ',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 9,
                    'name' => 'しこね',
                    'is_answer' => false,
                ],
                [    
                    'question_id' => 9,
                    'name' => 'ししぼね',
                    'is_answer' => true,
                 
                ],

                [    
                    'question_id'=> 10,
                    'name' => 'こしゃく',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 10,
                    'name' => 'こはく',
                    'is_answer' => false,
                ],
                [    
                    'question_id'=> 10,
                    'name' => 'こぐれ',
                    'is_answer' => true,
                ],
                [    
                    'question_id'=> 11,
                    'name' => 'むこうひら',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 11,
                    'name' => 'むきひら',
                    'is_answer' => false,
                ],
                
                [    
                    'question_id'=> 11,
                    'name' => 'むかいなだ',
                    'is_answer' => true,
                ],
                [    
                    'question_id'=> 12,
                    'name' => 'みつぎ',
                    'is_answer' => true,
                ],
               
                [    
                    'question_id'=> 12,
                    'name' => 'みよし',
                    'is_answer' => false,
                ],

                [    
                    'question_id'=> 12,
                    'name' => 'おしらべ',
                    'is_answer' => false,
                ],
                [    
                    'question_id'=> 13,
                    'name' => 'ぎんざん',
                    'is_answer' => false,
                ],
               
                [    
                    'question_id'=> 13,
                    'name' => 'きやま',
                    'is_answer' => false,
                ],

                [    
                    'question_id'=> 13,
                    'name' => 'かなやま',
                    'is_answer' => true,
                ],


            
            ]);
        }
    }
}
