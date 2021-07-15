<?php

namespace App\Http\Requests;

use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
class BookRequest extends Request{
    public function autorize(){
        return true;
    }
    public function rules()
    {
        return [
            'title'->'required|max:255',
           'author'->'required|max:255',


        ];
    }
}
