<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpTipoAbonoEditRequest extends FormRequest
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
            
				"cb_id" => "filled|numeric",
				"cb_cod_banco" => "filled|numeric",
				"cb_per_id" => "filled|numeric",
				"cb_num_cuenta" => "filled|string",
				"cb_tipo_abono" => "nullable|string",
				"cb_fecha_mod" => "nullable|date",
				"cb_estado" => "nullable|string",
				"cb_secuencial" => "filled|numeric",
				"cb_fecha_formulario" => "nullable|date",
            
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
