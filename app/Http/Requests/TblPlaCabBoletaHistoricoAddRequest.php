<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaCabBoletaHistoricoAddRequest extends FormRequest
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
            
				"cbh_id" => "required|numeric",
				"cbh_per_id" => "required|numeric",
				"cbh_pc_id" => "required|numeric",
				"cbh_ca_id" => "required|numeric",
				"cbh_es_id" => "required|numeric",
				"cbh_afp_id" => "required|numeric",
				"cbh_tp_id" => "required|numeric",
				"cbh_cod_banco" => "required|numeric",
				"cbh_num_cta" => "required|string",
				"cbh_ta_id" => "required|numeric",
				"cbh_tipo_aportante" => "required|numeric",
				"cbh_tipo_func" => "required|string",
				"cbh_ti_item" => "required|string",
				"cbh_tipo_gasto" => "required|string",
				"cbh_fecha_proceso" => "required|date",
				"cbh_secuencial" => "required|numeric",
				"cbh_asignacion" => "required|string",
				"cbh_tipo_baja" => "nullable|string",
				"cbh_estado" => "nullable|string",
            
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
