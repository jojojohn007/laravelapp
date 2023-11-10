<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest {

    public function rules(){

        return [
        'name'=>['required','string','max:255'],
        'email'=>['required','email','unique:users'],
        'password'=>['required','string','min:8']
        ];
        
    }
    
}