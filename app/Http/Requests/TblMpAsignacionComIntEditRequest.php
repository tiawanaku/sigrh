<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpAsignacionComIntEditRequest extends FormRequest
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
            
				"ci_per_id" => "nullable|numeric",
				"ci_ca_id" => "nullable|numeric",
				"ci_fecha_inicio" => "nullable|date",
				"ci_fecha_fin" => "nullable|date",
				"ci_estado" => "nullable|string",
				"ci_tipo_reg" => "nullable|string",
				"ci_tipo_mov" => "nullable|string",
				"ci_pr_id" => "nullable|numeric",
				"ci_tipo_mov_baja" => "nullable|string",
				"ci_ca_id_ant" => "nullable|numeric",
				"ci_ca_id_n" => "nullable|numeric",
				"ci_es_id_n" => "nullable|numeric",
				"ci_eo_id_n" => "nullable|numeric",
				"ci_per_id_interinato" => "nullable|numeric",
				"ci_validacion" => "nullable|string",
				"ci_fecha_validacion" => "nullable|date",
				"ci_memo" => "nullable|numeric",
				"ci_memo_baja" => "nullable|numeric",
				"ci_usuario_creacion" => "nullable|numeric",
				"ci_fecha_creacion" => "nullable|date",
            
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
