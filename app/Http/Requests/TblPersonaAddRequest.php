<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPersonaAddRequest extends FormRequest
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
            
				"per_tipo_doc" => "required|numeric",
				"per_num_doc" => "required|string",
				"per_lugar_exp" => "required|numeric",
				"per_ap_paterno" => "nullable|string",
				"per_ap_materno" => "nullable|string",
				"per_nombres" => "required|string",
				"per_ap_casada" => "nullable|string",
				"per_sexo" => "required",
				"per_fecha_nac" => "nullable|date",
				"per_procedencia" => "required|numeric",
				"per_serie_libreta_militar" => "nullable|string",
				"per_lugar_nac" => "nullable|numeric",
				"per_estado_civil" => "nullable|numeric",
				"per_fecha_registro" => "nullable|date",
            
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
