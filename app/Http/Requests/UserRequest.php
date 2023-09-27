<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user.password'=>'required|string|min:8',
            'user.weight' => 'required|string|max:5',
            'user.BFP' => 'required|string|max:4',
            //
        ];
    }
}
