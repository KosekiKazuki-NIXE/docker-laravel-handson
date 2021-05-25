<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class TestController extends Controller
{
    public function index(){
        return view('test');
    }
    public function store(Request $request){
        $testModel = new Test;

        $saveData = $request->all();

        $testModel->test($saveData)->save();
    }
}
