<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        //
        $data = array ( 
            'name' => 'Pocholo L. Gopez',
            'course' => 'BSIT',
            'text' => "I am a sample text."
        );
        return view('post')->with('data', $data);
    }


}
