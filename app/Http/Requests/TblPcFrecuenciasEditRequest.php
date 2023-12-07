<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPcFrecuenciasEditRequest extends FormRequest
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
            
				"fr_es_id" => "filled|numeric",
				"fr_tiempo" => "filled|numeric",
				"fr_cp_id" => "filled|numeric",
				"fr_pu_descripcion" => "nullable|string",
				"fr_estado" => "filled|string",
				"fr_observaciones" => "nullable|string",
				"fr_cod_poa" => "nullable|numeric",
				"fr_fecha_inicio" => "nullable|date",
				"fr_fecha_fin" => "nullable|date",
				"fr_id_anterior" => "nullable|numeric",
				"fr_tiempo_original" => "nullable|numeric",
				"fr_tipo_jornada" => "filled|string",
				"fr_obj_puesto" => "nullable",
            
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
