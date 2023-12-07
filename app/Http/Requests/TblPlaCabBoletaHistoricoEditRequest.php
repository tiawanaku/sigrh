<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaCabBoletaHistoricoEditRequest extends FormRequest
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
            
				"cbh_id" => "filled|numeric",
				"cbh_per_id" => "filled|numeric",
				"cbh_pc_id" => "filled|numeric",
				"cbh_ca_id" => "filled|numeric",
				"cbh_es_id" => "filled|numeric",
				"cbh_afp_id" => "filled|numeric",
				"cbh_tp_id" => "filled|numeric",
				"cbh_cod_banco" => "filled|numeric",
				"cbh_num_cta" => "filled|string",
				"cbh_ta_id" => "filled|numeric",
				"cbh_tipo_aportante" => "filled|numeric",
				"cbh_tipo_func" => "filled|string",
				"cbh_ti_item" => "filled|string",
				"cbh_tipo_gasto" => "filled|string",
				"cbh_fecha_proceso" => "filled|date",
				"cbh_secuencial" => "filled|numeric",
				"cbh_asignacion" => "filled|string",
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
