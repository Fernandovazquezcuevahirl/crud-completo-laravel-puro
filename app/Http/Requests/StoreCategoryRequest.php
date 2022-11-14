<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;


class StoreCategoryRequest extends FormRequest
{

    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         // 'slug'=>Str::of($this->title)->slug()->append("-add"),
    //         'slug' => str($this->title)->slug()->append("-adda")
    //     ]);
    // }
    // public static function Myrules()
    // {
    //     return [
            
    //         "title" => "required|min:5|max:200|unique:posts",
    //         "slug" => "required|min:5|max:100",
    //         "content" => "required|min:10",
    //         "category_id" => "required|integer",
    //         "description" => "required|min:10",
    //         "posted" => "required",
    //     ];
    // }
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            "title" => "required|min:5|max:200|unique:categories",
           
        ];
    }
}
