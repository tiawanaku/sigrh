<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpMemosHistoricoEditRequest extends FormRequest
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
            
				"mh_id" => "filled|numeric",
				"mh_qr" => "nullable|string",
				"mh_per_id" => "nullable|numeric",
				"mh_te_id" => "nullable|numeric",
				"mh_nro_memo" => "nullable|numeric",
				"mh_contenido" => "nullable",
				"mh_validacion" => "nullable|string",
				"mh_fecha_validacion" => "nullable|date",
				"mh_usuario_creacion" => "nullable|numeric",
				"mh_fecha_creacion" => "nullable|date",
				"mh_pr_id" => "nullable|numeric",
            
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
