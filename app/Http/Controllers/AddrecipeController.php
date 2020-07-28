<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddrecipeController extends Controller
{
    //Gets the recipe details from the form
    public function create(){

        return view('addrecipes.create');
        
    }

    //Posts the recipe details to the home page
    public function store(){

        //validating the image field to ensure that the file chosen is actually an image
        //For the the other fields that do not need validation we pass an empty array
        $data=request()->validate([
            'title'=>'required',
            'image'=>'required|image',
            'mealtype'=>'required',
            'difficulty'=>'required',
            'ingredients'=>'required',
            'prepsteps'=>'required',
            'numberofpeople'=>'required',

        ]);

        //Getting the authenticated user to fill in the user_id field then storing all the recieved data
        auth()->user()->recipes()->create($data);

       
        dd(request()->all());

    }
}
