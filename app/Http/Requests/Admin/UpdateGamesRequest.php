<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGamesRequest extends FormRequest
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
            
            'start_time' => 'nullable|date_format:'.config('app.date_format').' H:i:s',
            'result1' => 'max:2147483647|nullable|numeric',
            'result2' => 'max:2147483647|nullable|numeric',
        ];
    }
}
