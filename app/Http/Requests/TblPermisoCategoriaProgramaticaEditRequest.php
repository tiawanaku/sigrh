<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPermisoCategoriaProgramaticaEditRequest extends FormRequest
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
            
				"pcp_rol" => "filled|numeric",
				"pcp_ue" => "filled|numeric",
				"pcp_cp_id" => "nullable|numeric",
				"pcp_estado" => "filled|string",
				"pcp_us_id" => "filled|numeric",
				"pcp_pr_id" => "filled|numeric",
				"pcp_fecha_asignacion" => "nullable|date",
				"pcp_fecha_baja" => "nullable|date",
            
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
