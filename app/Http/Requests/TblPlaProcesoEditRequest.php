<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaProcesoEditRequest extends FormRequest
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
            
				"pc_id" => "filled|numeric",
				"pc_pr_id" => "filled|numeric",
				"pc_titulo" => "filled|string",
				"pc_fecha_inicio" => "nullable|date",
				"pc_fecha_fin" => "nullable|date",
				"pc_mn_id" => "filled|numeric",
				"pc_ufv" => "nullable|numeric",
				"pc_ufv_fecha" => "nullable|date",
				"pc_estado" => "filled|string",
				"pc_prefijo" => "nullable|string",
            
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
