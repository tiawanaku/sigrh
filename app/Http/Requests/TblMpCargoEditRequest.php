<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpCargoEditRequest extends FormRequest
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
            
				"ca_id" => "filled|numeric",
				"ca_es_id" => "nullable|numeric",
				"ca_eo_id" => "nullable|numeric",
				"ca_ti_item" => "nullable|string",
				"ca_num_item" => "nullable|numeric",
				"ca_estado" => "nullable|string",
				"ca_aplica_incremento" => "nullable|string",
				"ca_tipo_jornada" => "nullable|string",
				"ca_basico_calculado" => "nullable|numeric",
				"ca_tipo_calculo" => "nullable|numeric",
				"ca_pr_id" => "nullable|numeric",
				"ca_usuario_creacion" => "nullable|numeric",
				"ca_fecha_creacion" => "nullable|date",
            
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
