<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ospite;

class TestController extends Controller
{
    public function home()
    {

        $ospiti = Ospite::all();
        //dd($ospiti);
                                    //x stampare sull'html
        return view('pages.home', compact('ospiti'));

    }

    public function show($id)
    {
        //dd($id);

        $ospite = Ospite::find($id);

        //dd($ospite);
        return view('pages.ospite', compact('ospite'));
    }

    
    public function form()
    {
        
        return view('pages.ospiti-form');
    }

    public function store(Request $request){

        //dd($request -> all());

        $validate =$request -> validate([

            'name' => 'nullable|max:100',
            'lastname' => 'nullable|max:100',
            'date_of_birth' => 'nullable|date',
            'document_type' => 'nullable|max:20',
            'document_number' => 'nullable|numeric'


        ]);

        $ospite = Ospite::create($validate);

        return redirect()->route('show-ospite', $ospite->id);
    }

    

   
}
