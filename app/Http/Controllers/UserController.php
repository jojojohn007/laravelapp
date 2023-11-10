<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{


    private $request ;

    private $userRegRequest;
    //

    public function __construct(Request $request)
    {
        // $this->userRegRequest = $userRegRequest;
     $this->request = $request ;   
    }
    public function index(){
        echo 'this is a index function';
        dd($this->request);
    }

    public function signup(){

        echo 'this is user controller';
        dump($this->request->header());

        // $validateData = $this->userRegRequest->validate($this->request->input());
        // dump($validateData);
        


    }


}
