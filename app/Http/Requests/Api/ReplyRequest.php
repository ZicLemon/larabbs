<?php

namespace App\Http\Requests\Api;

class ReplyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case "POST":
                return [
                    'content' => 'required|min:2',
                ];
                break;
            case "PATCH":

                break;
        }
    }
}
