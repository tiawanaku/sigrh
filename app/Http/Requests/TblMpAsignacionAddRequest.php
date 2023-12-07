<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpAsignacionAddRequest extends FormRequest
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
            
				"as_per_id" => "required|numeric",
				"as_ca_id" => "required|numeric",
				"as_fecha_inicio" => "nullable|date",
				"as_fecha_fin" => "nullable|date",
				"as_estado" => "nullable|string",
				"as_tipo_reg" => "nullable|string",
				"as_tipo_mov" => "nullable|string",
				"as_tipo_baja" => "nullable|string",
				"as_validacion" => "nullable|string",
				"as_fecha_validacion" => "nullable|date",
				"as_memo" => "nullable|numeric",
				"as_memo_baja" => "nullable|numeric",
				"as_usuario_creacion" => "nullable|numeric",
				"as_fecha_creacion" => "nullable|date",
				"as_pr_id" => "nullable|numeric",
            
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
