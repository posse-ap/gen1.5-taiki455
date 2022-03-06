<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Question;
use App\Choice;
use App\Title;


class EditController extends Controller
{
    public function title()
    {
      $title = Title::get();
      return view('edit.title.list',compact('title'));
    }
    
    public function title_editer($title_id)
    {
      $edit_title = Title::find($title_id);
      return view('edit.title.edit',compact('edit_title','title_id'));
    }

    public function question_number($title_id)

    {
      $questions = Question::where('title_id','=',$title_id)->get();
      return view('edit.question.list',compact('questions','title_id'));
    }

    public function question_editer($title_id,$question_id)
    {
      $edit_question = Question::where('id','=',$question_id)->first();
      return view('edit.question.edit',compact('edit_question','title_id','question_id'));
    }

    public function question_number_create(Request $request){
      
        Question::create([
          'question_number' => $request["create_question_number"],
          'title_id'=> $request["title_id"]
        ]);
        return redirect()->route('question_list',['title_id'=>$request->title_id]);
    
    }

    public function update(Request $request,$title_id)
    {
      
      Choice::where('id',$request["choice_1_id"])->update([
        'name' => $request["choice_1"],
       
      ]);
      Choice::where('id',$request["choice_2_id"])->update([
        'name' => $request["choice_2"],
       
      ]);
      Choice::where('id',$request["choice_3_id"])->update([
        'name' => $request["choice_3"],
       
      ]);
      
      return redirect(route('question_list',['title_id'=>$title_id]));
    }

    public function update_title(Request $request){
      
      Title::where('id',$request["title_name_id"])->update([
        'title' => $request["title_name"],
       
      ]);
      return redirect(route('admin_menu'));
    }

    public function create_delete_title(Request $request){
      
      
      if($request->has('create_title')){

        Title::create([
          'title' => $request["create_title_name"],
          'title_id' => $request["create_title"],
        ]);
        return redirect(route('admin_menu'));

    }
      elseif($request->has('delete_title')){

        Title::destroy($request['delete_id']);
        return redirect(route('admin_menu'));
        // ここに削除ボタン押下時の処理
    }
      //本来はこの方法を取らずに、formタグactionのルートを別々のものにする
      
    }
  
    // public function delete_title(Request $request){
      
    // }
     
     
}

// Quiz::where('id', $id)->update([
//   'title' => $request['quiz_title']
// ]);