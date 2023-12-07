<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpAsistenciaEditRequest extends FormRequest
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
            
				"att_id" => "filled|numeric",
				"att_per_id" => "filled|numeric",
				"att_fecha" => "filled|date",
				"att_dia" => "filled|string",
				"att_ing1" => "nullable|string",
				"att_sal1" => "nullable|string",
				"att_ing2" => "nullable|string",
				"att_sal2" => "nullable|string",
				"att_id_lic_ing1" => "nullable|numeric",
				"att_id_lic_sal1" => "nullable|numeric",
				"att_id_lic_ing2" => "nullable|numeric",
				"att_id_lic_sal2" => "nullable|numeric",
				"att_min_atraso" => "nullable|numeric",
				"att_min_atraso_mayor30" => "nullable|numeric",
				"att_min_salio_antes" => "nullable|numeric",
				"att_min_extras" => "nullable|numeric",
				"att_tipo_observado" => "nullable|string",
				"att_id_horario" => "nullable|numeric",
				"att_id_horario_esp" => "nullable|numeric",
				"att_edificio" => "nullable|numeric",
            
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
