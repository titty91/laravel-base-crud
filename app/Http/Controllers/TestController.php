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
}
