<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaTransaccionesCuotasEditRequest extends FormRequest
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
            
				"tc_tr_id" => "filled|numeric",
				"tc_cant_cuotas" => "filled|numeric",
				"tc_monto" => "filled|numeric",
				"tc_montobs" => "nullable|numeric",
				"tc_estado" => "filled|string",
				"tc_fechapago" => "nullable|date",
				"tc_fechareprogamado" => "nullable|date",
				"tc_tipopago" => "nullable|numeric",
				"tc_obs" => "nullable",
				"tc_fechadeposito" => "nullable|date",
				"tc_nrofactura" => "nullable|string",
				"tc_usuario" => "nullable|numeric",
				"tc_fecharegistro" => "nullable|date",
				"tc_tipohaberdebe" => "nullable|string",
				"tc_tiposervicio" => "nullable|string",
            
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
