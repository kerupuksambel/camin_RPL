<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidator extends FormRequest
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
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
        ]);

        $messages = [
            'required' => 'Isi dulu',
        ];
        
        $validator = Validator::make($input, $rules, $messages);
    }
}
