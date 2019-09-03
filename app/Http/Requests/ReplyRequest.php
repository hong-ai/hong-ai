<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
         return [
            'content' => 'required|min:2',
        ];

        switch($this->method())
        {
            // CREATE
            case 'POST':
            {
                return [
                ];
            }
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    // UPDATE ROLES
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
        ];
    }
}
