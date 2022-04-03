<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Submission;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
      $user = auth()->id();
      return inertia("Dashboard", [
        "data"=>Submission::query()->where("user_id", $user)->get(),
      ]);
    }


    public function testupload(Request $request) {
      $data = $request->validate([
        'input' => ["required"],
        'radio' => ["required"]
      ]);
      $test = new Test($data);
      $test->save();
      return redirect('/');
    }
    public function submitForm(Request $request) {
      $user = auth()->id();
      if($request['submitted']){
        $data = $request->validate([
          'profession' => ["required"],
          'organisation' => ["required"],
          'task_1' => ["required"],
          'task_2' => ["required"],
          'task_3' => ["required"],
          'step_1' => ["required"],
          'step_2' => ["required"],
          'step_3' => ["required"],
          'radio_1' => ["required"],
          'comment_1' => ["required"],
          'radio_2' => ["required"],
          'comment_2' => ["required"],
          'radio_3' => ["required"],
          'comment_3' => ["required"],
          'radio_4' => ["required"],
          'comment_4' => ["required"],
          'radio_5' => ["required"],
          'comment_5' => ["required"],
          'radio_6' => ["required"],
          'comment_6' => ["required"],
          'analysis' => ["required"],
        ]);
      }

      Submission::updateOrCreate(
        [
          'user_id'=>$user
        ],
        [
          'profession'=>$request['profession'],
          'organisation'=>$request['organisation'],
          'task_1'=>$request['task_1'],
          'task_2'=>$request['task_2'],
          'task_3'=>$request['task_3'],
          'step_1'=>$request['step_1'],
          'step_2'=>$request['step_2'],
          'step_3'=>$request['step_3'],
          'radio_1'=>$request['radio_1'],
          'comment_1'=>$request['comment_1'],
          'radio_2'=>$request['radio_2'],
          'comment_2'=>$request['comment_2'],
          'radio_3'=>$request['radio_3'],
          'comment_3'=>$request['comment_3'],
          'radio_4'=>$request['radio_4'],
          'comment_4'=>$request['comment_4'],
          'radio_5'=>$request['radio_5'],
          'comment_5'=>$request['comment_5'],
          'radio_6'=>$request['radio_6'],
          'comment_6'=>$request['comment_6'],
          'analysis'=>$request['analysis'],
          'submitted'=>$request['submitted'],
        ]
      );

      return redirect('/');
    }
}
