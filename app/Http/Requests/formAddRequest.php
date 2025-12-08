<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
                  "name"=> "required|min:3|max:25",
                  "lastname"=> "required|min:5|max:30",
                  "score"=> "required|numeric|min:0|max:100",
                   "age"=> "required|integer|min:7|max:50",
                   "gender"=> "required|in:m,f",
        ];
    }
    public function messages(){
        return [
                 "name.required" =>"you are out of your mind",
                  "lastname.required" =>"You are a bit crazy",
                  "score.required" =>"you should see a doctor",
        ];
    }
}
