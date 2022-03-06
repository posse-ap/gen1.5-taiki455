<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question_number','question_form','img_name','title_id'];
    
    public function choices(){
        return $this -> hasMany(Choice::class);
    }

   
}
