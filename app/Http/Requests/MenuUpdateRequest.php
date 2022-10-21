<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuUpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'description' => 'nullable',
            'prix' => 'required|integer',
            'category_id' => 'integer',
            'acteur_id' => 'integer',
            'photo' => 'nullable|image|mimes:jpg,jpeg,svg,png,gif|max:100000',
        ];
    }
}
