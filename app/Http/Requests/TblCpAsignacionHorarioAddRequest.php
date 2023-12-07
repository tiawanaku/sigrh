<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpAsignacionHorarioAddRequest extends FormRequest
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
            
				"ah_per_id" => "required|numeric",
				"ah_tipo_horario" => "required|numeric",
				"ah_fecha_inicial" => "required|date",
				"ah_fecha_final" => "required|date",
				"ah_lun_ing1" => "required|string",
				"ah_lun_sal1" => "required|string",
				"ah_lun_ing2" => "required|string",
				"ah_lun_sal2" => "required|string",
				"ah_mar_ing1" => "required|string",
				"ah_mar_sal1" => "required|string",
				"ah_mar_ing2" => "required|string",
				"ah_mar_sal2" => "required|string",
				"ah_mie_ing1" => "required|string",
				"ah_mie_sal1" => "required|string",
				"ah_mie_ing2" => "required|string",
				"ah_mie_sal2" => "required|string",
				"ah_jue_ing1" => "required|string",
				"ah_jue_sal1" => "required|string",
				"ah_jue_ing2" => "required|string",
				"ah_jue_sal2" => "required|string",
				"ah_vie_ing1" => "required|string",
				"ah_vie_sal1" => "required|string",
				"ah_vie_ing2" => "required|string",
				"ah_vie_sal2" => "required|string",
				"ah_sab_ing1" => "required|string",
				"ah_sab_sal1" => "required|string",
				"ah_sab_ing2" => "required|string",
				"ah_sab_sal2" => "required|string",
				"ah_dom_ing1" => "required|string",
				"ah_dom_sal1" => "required|string",
				"ah_dom_ing2" => "required|string",
				"ah_dom_sal2" => "required|string",
				"ah_autorizado" => "nullable|string",
				"ah_json" => "nullable",
				"ah_estado" => "required|string",
            
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
