<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == "todo/update"){
          
            return true;
        }else{
            return false;
        }
       
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required",
            "due"   => "required",
            "content" => "required",
            "status" => "required",
        ];
    }


    public function messages()
    {
        return [
            'title.required' => "*全ての項目を入力する必要があります*"
        ];
    }
}
