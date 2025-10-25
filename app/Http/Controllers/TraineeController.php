<?php

namespace App\Http\Controllers;
use App\Models\Trainee;
class TraineeController
{
    // public function index(){
    //     return view('pages.about');
    // }
    public function index(){
        $traineess = Trainee::all();
        return view('pages.index', compact('traineess'));
    }
    public function show($id){
        $trainee = Trainee::find($id);
        return view('pages.show', compact('trainee'));
    }
}
