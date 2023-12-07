<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpLicenciaJustificadaEditRequest extends FormRequest
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
            
				"lj_per_id" => "filled|numeric",
				"lj_tipo_licencia" => "nullable|numeric",
				"lj_fecha_inicial" => "nullable|date",
				"lj_fecha_final" => "nullable|date",
				"lj_fecha_emision" => "nullable|date",
				"lj_hora_salida" => "nullable|string",
				"lj_hora_retorno" => "nullable|string",
				"lj_motivo" => "nullable|string",
				"lj_lugar" => "nullable|string",
				"lj_per_id_autoriza" => "nullable|string",
				"lj_estado" => "filled|string",
            
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
