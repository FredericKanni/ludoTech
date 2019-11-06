<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JeuxController extends Controller
{

    function index()
    {
        return view('jeux');
    }

    function add(Request $request)
    {


        $validatedData = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'editeur' => 'required',
                'prix' => 'required',
                'commentaire' => 'required'
            ],
            [
                'required' => 'Le champ :attribute est requis.',
            ]
        )->validate();


        DB::table('jeux')->insert(
            $validatedData
        );
       
       
        


        //la fubntion add renvoie la valeur de ...
        return json_encode($validatedData);
    }


    function all(){
        $all = DB::table('jeux')
        ->get();
        return json_encode($all);
    }


    
}
