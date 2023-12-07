<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblSalariosMinimosAddRequest extends FormRequest
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
            
				"sm_id" => "required|numeric",
				"sm_importe" => "required|numeric",
				"sm_operacion" => "required|string",
				"sm_fecha_vigencia" => "required|date",
				"sm_porcentaje_incremento" => "required|numeric",
				"sm_estado" => "required|string",
            
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
