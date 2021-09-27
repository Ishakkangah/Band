<?php

namespace App\Http\Requests\Album;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestAlbum extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('albums')->where(function($query){
                return $query->where('band_id', $this->band);
            })],
            // 'name' => 'required|unique:albums,name',
            'year' => 'required|numeric|digits:4',
            'band' => 'required|'
        ];
    }
}
