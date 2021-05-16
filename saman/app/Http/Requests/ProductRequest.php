<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        if($this->method() == 'POST') {
            return [
                'title' => 'required|max:250',
                'type_id'=>'required',
                'brand_id'=>'required',
                'description' => 'required',
                'body' => 'required|min:5',
                'images' => 'required|mimes:jpeg,png,bmp',
                'tags' => 'required|max:190',
                'weight'=>'required',
            ];
        }

        return [
                 'title' => 'required|max:250',
                 'type_id'=>'required',
                 'brand_id'=>'required',
            'description' => 'required',
            'body' => 'required',
            'tags' => 'required|max:190',
            'weight'=>'required'
        ];
    }
}
