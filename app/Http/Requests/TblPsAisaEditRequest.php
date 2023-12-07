<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPsAisaEditRequest extends FormRequest
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
            
				"ps_id" => "filled|numeric",
				"ps_per_id" => "nullable|numeric",
				"ps_secuencial" => "nullable|numeric",
				"ps_n_sitram" => "nullable|numeric",
				"ps_numero" => "nullable|string",
				"ps_gestion" => "nullable|numeric",
				"ps_causa" => "nullable|string",
				"ps_fecha_creacion" => "nullable|date",
				"ps_doc_adjunta" => "nullable|string",
				"ps_fecha_ejecucion_sancion" => "nullable|date",
				"ps_tipo_resolucion" => "nullable|numeric",
				"ps_resolucion" => "nullable|string",
				"ps_fecha_resolucion" => "nullable|date",
				"ps_estado" => "nullable|numeric",
				"ps_id_sancion" => "nullable|numeric",
				"ps_unidad_organizacional" => "nullable|string",
            
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
