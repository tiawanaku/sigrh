<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpCategoriaProgramaticaAddRequest extends FormRequest
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
            
				"cp_da" => "required|numeric",
				"cp_da_descripcion" => "required|string",
				"cp_ue" => "required|numeric",
				"cp_ue_descripcion" => "required|string",
				"cp_programa" => "required|numeric",
				"cp_proyecto" => "nullable|numeric",
				"cp_actividad" => "required|numeric",
				"cp_cod_poa" => "required|numeric",
				"cp_descripcion" => "required|string",
				"cp_estado" => "required|string",
				"cp_tipo_gasto" => "required|string",
				"cp_fuente" => "nullable|numeric",
				"cp_organismo" => "nullable|numeric",
				"cp_pr_id" => "required|numeric",
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
