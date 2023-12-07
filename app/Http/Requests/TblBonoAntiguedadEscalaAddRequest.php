<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBonoAntiguedadEscalaAddRequest extends FormRequest
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
            
				"ba_id" => "required|numeric",
				"ba_tiempo_minimo" => "nullable|numeric",
				"ba_tiempo_maximo" => "nullable|numeric",
				"ba_porcentaje" => "nullable|numeric",
				"ba_estado" => "nullable|string",
            
        ];
    }

	public function messages()
    {
        return [
			
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
