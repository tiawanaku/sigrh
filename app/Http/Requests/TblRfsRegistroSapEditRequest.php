<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblRfsRegistroSapEditRequest extends FormRequest
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
            
				"rs_id" => "filled|numeric",
				"rs_per_id" => "nullable|numeric",
				"rs_ca_num_item" => "filled|numeric",
				"rs_ca_id_actual" => "filled|numeric",
				"rs_pu_id_actual" => "filled|numeric",
				"rs_eo_id_actual" => "filled|numeric",
				"rs_eo_descripcion_actual" => "filled|string",
				"rs_eo_destino" => "filled|string",
				"rs_eo_descripcion_destino" => "filled|string",
				"rs_ca_id_destino" => "filled|numeric",
				"rs_pu_id_destino" => "filled|numeric",
				"rs_justificacion_tecnica" => "filled|string",
				"rs_objetivo_propuesto" => "filled|string",
				"rs_formacion" => "filled|string",
				"rs_rc_id" => "filled|numeric",
				"rs_nro_informe_tecnico" => "filled|string",
				"rs_nro_informe_legal" => "filled|string",
				"rs_cp_da" => "filled|numeric",
				"rs_cp_ue" => "filled|numeric",
				"rs_fecha_registro" => "filled|date",
				"rs_fecha_modificacion" => "filled|date",
				"rs_usuario_registro" => "filled|numeric",
				"rs_valida_destino" => "filled|string",
				"rs_ratifica_origen" => "filled|string",
				"rs_cp_ue_destino" => "filled|numeric",
				"rs_estado" => "filled|string",
            
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
