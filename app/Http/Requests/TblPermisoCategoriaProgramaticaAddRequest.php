<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPermisoCategoriaProgramaticaAddRequest extends FormRequest
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
            
				"pcp_rol" => "required|numeric",
				"pcp_ue" => "required|numeric",
				"pcp_cp_id" => "nullable|numeric",
				"pcp_estado" => "required|string",
				"pcp_us_id" => "required|numeric",
				"pcp_pr_id" => "required|numeric",
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
