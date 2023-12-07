<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblRfsRegistroSapAddRequest extends FormRequest
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
            
				"rs_id" => "required|numeric",
				"rs_per_id" => "nullable|numeric",
				"rs_ca_num_item" => "required|numeric",
				"rs_ca_id_actual" => "required|numeric",
				"rs_pu_id_actual" => "required|numeric",
				"rs_eo_id_actual" => "required|numeric",
				"rs_eo_descripcion_actual" => "required|string",
				"rs_eo_destino" => "required|string",
				"rs_eo_descripcion_destino" => "required|string",
				"rs_ca_id_destino" => "required|numeric",
				"rs_pu_id_destino" => "required|numeric",
				"rs_justificacion_tecnica" => "required|string",
				"rs_objetivo_propuesto" => "required|string",
				"rs_formacion" => "required|string",
				"rs_rc_id" => "required|numeric",
				"rs_nro_informe_tecnico" => "required|string",
				"rs_nro_informe_legal" => "required|string",
				"rs_cp_da" => "required|numeric",
				"rs_cp_ue" => "required|numeric",
				"rs_fecha_registro" => "required|date",
				"rs_fecha_modificacion" => "required|date",
				"rs_usuario_registro" => "required|numeric",
				"rs_valida_destino" => "required|string",
				"rs_ratifica_origen" => "required|string",
				"rs_cp_ue_destino" => "required|numeric",
				"rs_estado" => "required|string",
            
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
