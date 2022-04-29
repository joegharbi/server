<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePetRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'sometimes|required',
            'species'=>'sometimes|required',
            'birth-date'=>'sometimes|required|date|before:now',
            'death-date'=>'sometimes|date|after:birth-date',
            'note'=>'sometimes',
        ];
    }
}
