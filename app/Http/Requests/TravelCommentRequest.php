<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelCommentRequest extends FormRequest
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
            'travel_packages_id' => 'required|integer|exists:travel_packages,id',
            'user_id' => 'required|integer',
            'comment' => 'required|max:256'
        ];
    }
}
