<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'=>'required',
            'FechaInicio'=>'required',
            'FechaFin'=>'required',
            'provincia'=>'required',
            'editorial'=>'required',
            'TipoPublicacion'=>'required',
            'descripcion'=>'required'
            
        ];
    }
    public function messages()
    {
        return[
            'title.required'=>"El proyecto necesita un titulo",
        ];
    }
}
