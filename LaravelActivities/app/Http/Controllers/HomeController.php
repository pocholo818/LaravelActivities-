<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //
        $data = array ( 
            'text' => 'I am Home Controller',
            'subtext' => 'Subtext',
            'school' => "Gordon College"
        );
        return view('home')->with('data', $data);
    }

    
}
