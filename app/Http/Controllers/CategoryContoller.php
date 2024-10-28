<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryContoller extends Controller
{
    public function create(Request $request){
        Category::create(attibutes: [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}
