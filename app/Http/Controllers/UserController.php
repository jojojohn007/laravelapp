<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    private $request ;
    //

    public function __construct(Request $request)
    {
     $this->request = $request ;   
    }
    public function index(){
        echo 'this is a index function';
        dd($this->request);
    }

    public function signup(Request $request){

        echo 'this is user controller';

        dd($this->request->input());

        // dd($request->input('email'),$request);

    }
}
