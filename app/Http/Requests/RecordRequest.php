<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'record.weight'=>'required|string|max:4',
            'record.BFP' => 'required|string|max:4',
            'record.body' => 'required|string|max:500',
            //
        ];
    }
}
