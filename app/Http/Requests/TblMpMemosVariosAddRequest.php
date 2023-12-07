<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpMemosVariosAddRequest extends FormRequest
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
            
				"mv_id" => "required|numeric",
				"mv_per_id" => "nullable|numeric",
				"mv_datos" => "nullable",
				"mv_nro_memo" => "nullable|numeric",
				"mv_validacion" => "nullable|string",
				"mv_fecha_validacion" => "nullable|date",
				"mv_estado" => "nullable|string",
				"mv_usuario_creacion" => "nullable|numeric",
				"mv_fecha_creacion" => "nullable|date",
				"mv_pr_id" => "nullable|numeric",
            
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
