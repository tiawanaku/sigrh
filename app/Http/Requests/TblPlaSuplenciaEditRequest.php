<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaSuplenciaEditRequest extends FormRequest
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
            
				"plasup_id" => "filled|numeric",
				"plasup_correlativo" => "nullable|string",
				"plasup_fecha_emision" => "nullable|date",
				"plasup_iniciales" => "nullable|string",
				"plasup_fecha_recep_contrato" => "nullable|date",
				"plasup_id_asig" => "nullable|numeric",
				"plasup_valor_rciva" => "nullable|numeric",
				"plasup_fecha_recep_valor_rciva" => "nullable|date",
				"plasup_fecha_inicio_baja_medica" => "nullable|date",
				"plasup_fecha_fin_baja_medica" => "nullable|date",
				"plasup_tipo_baja_medica" => "nullable|string",
				"plasup_salario_minimo" => "nullable|numeric",
				"plasup_novedad" => "nullable|string",
				"plasup_per_id_suplantado" => "nullable|numeric",
				"plasup_correlativo_interno" => "nullable|numeric",
				"plasup_gestion_correlativo_interno" => "nullable|numeric",
				"plasup_afp" => "nullable|string",
				"plasup_tipo_aportante" => "nullable|numeric",
				"plasup_egs" => "nullable|string",
            
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
