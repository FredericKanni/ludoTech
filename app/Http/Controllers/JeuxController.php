<?php

namespace App\Http\Controllers;

use App\Jeux;
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


        $id=Jeux::create($validatedData )->id;

        $validatedData['id']= $id;
/*ancien
        DB::table('jeux')->insert(
            $validatedData
        );
*/
        //la fubntion add renvoie la valeur de ...
        return json_encode($validatedData);
    }


    function all()
    {
//ctrl + space pour select ionner le  bon JEUX  app/jeux

$jeux= Jeux::all();






        return json_encode($jeux);


        // $to="totototot";
        // return json_encode($to);
    }


    function delete()
    {

      
        return json_encode("toto");
    }


    function jeu($id)
    {

//a revoir 
        $data = Jeux::find($id);

      
      return view('jeu');
    }


}
