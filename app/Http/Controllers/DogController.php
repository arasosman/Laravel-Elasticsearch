<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{

    public function index(){
        $dogs = Dog::paginate(10);
        return response()->json($dogs);
    }

    public function search(Request $request)
    {

        $dogs = Dog::search($request->get('query'))->paginate(10);
        return response()->json($dogs);
    }
}
