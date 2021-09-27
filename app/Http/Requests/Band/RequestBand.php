<?php

namespace App\Http\Requests\Band;

use Illuminate\Foundation\Http\FormRequest;

class RequestBand extends FormRequest
{
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'name' => 'required|string|unique:bands,name,' . optional($this->band)->id,
            'thumbnail' => 'nullable|image|mimes:jpg, jpeg, png, gif|max:2048',
            'genres' => 'required|array',
        ];
    }
}
