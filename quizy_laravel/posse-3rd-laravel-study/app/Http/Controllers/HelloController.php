<?php

namespace App\Http\Controllers;
use App\Question;
use App\Choice;
use App\Title;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

use function PHPUnit\Framework\returnSelf;

class HelloController extends Controller
{


  
  public function index()
  {
    return view('welcome');
  }

  public function menu()
  {
    $menu = Title::get();
    return view('menu_quizy',compact('menu'));
  }

  public function quizy($id)
  {
    
    // dd(Question::get());
    $title = Title::with('questions.choices')->find($id);//titleをquestionsに、questionsをchoicesにmigrate、bladeにてforeachで検索をかけなくても済む→ローディング速度up
    
    return view('tokyo_quizy',compact('title'));//questionsは21行目のquestions変数

    
  }

  
}
    
    


