<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovie extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:movies', 
            'director' => 'required', 
            'duration' => 'required',
            'releaseDate' => 'required',
            'duration' => 'min:1|max:500',
            'imageURL' => 'url'
        ];
    }
}
