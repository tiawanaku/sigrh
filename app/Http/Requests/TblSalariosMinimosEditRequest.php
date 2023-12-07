<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblSalariosMinimosEditRequest extends FormRequest
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
            
				"sm_id" => "filled|numeric",
				"sm_importe" => "filled|numeric",
				"sm_operacion" => "filled|string",
				"sm_fecha_vigencia" => "filled|date",
				"sm_porcentaje_incremento" => "filled|numeric",
				"sm_estado" => "filled|string",
            
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
