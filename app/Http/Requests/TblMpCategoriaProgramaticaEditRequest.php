<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpCategoriaProgramaticaEditRequest extends FormRequest
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
            
				"cp_da" => "filled|numeric",
				"cp_da_descripcion" => "filled|string",
				"cp_ue" => "filled|numeric",
				"cp_ue_descripcion" => "filled|string",
				"cp_programa" => "filled|numeric",
				"cp_proyecto" => "nullable|numeric",
				"cp_actividad" => "filled|numeric",
				"cp_cod_poa" => "filled|numeric",
				"cp_descripcion" => "filled|string",
				"cp_estado" => "filled|string",
				"cp_tipo_gasto" => "filled|string",
				"cp_fuente" => "nullable|numeric",
				"cp_organismo" => "nullable|numeric",
				"cp_pr_id" => "filled|numeric",
				"cp_fecha_modificacion" => "nullable|date",
            
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
