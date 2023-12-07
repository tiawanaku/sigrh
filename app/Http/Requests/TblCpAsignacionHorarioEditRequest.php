<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpAsignacionHorarioEditRequest extends FormRequest
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
            
				"ah_per_id" => "filled|numeric",
				"ah_tipo_horario" => "filled|numeric",
				"ah_fecha_inicial" => "filled|date",
				"ah_fecha_final" => "filled|date",
				"ah_lun_ing1" => "filled|string",
				"ah_lun_sal1" => "filled|string",
				"ah_lun_ing2" => "filled|string",
				"ah_lun_sal2" => "filled|string",
				"ah_mar_ing1" => "filled|string",
				"ah_mar_sal1" => "filled|string",
				"ah_mar_ing2" => "filled|string",
				"ah_mar_sal2" => "filled|string",
				"ah_mie_ing1" => "filled|string",
				"ah_mie_sal1" => "filled|string",
				"ah_mie_ing2" => "filled|string",
				"ah_mie_sal2" => "filled|string",
				"ah_jue_ing1" => "filled|string",
				"ah_jue_sal1" => "filled|string",
				"ah_jue_ing2" => "filled|string",
				"ah_jue_sal2" => "filled|string",
				"ah_vie_ing1" => "filled|string",
				"ah_vie_sal1" => "filled|string",
				"ah_vie_ing2" => "filled|string",
				"ah_vie_sal2" => "filled|string",
				"ah_sab_ing1" => "filled|string",
				"ah_sab_sal1" => "filled|string",
				"ah_sab_ing2" => "filled|string",
				"ah_sab_sal2" => "filled|string",
				"ah_dom_ing1" => "filled|string",
				"ah_dom_sal1" => "filled|string",
				"ah_dom_ing2" => "filled|string",
				"ah_dom_sal2" => "filled|string",
				"ah_autorizado" => "nullable|string",
				"ah_json" => "nullable",
				"ah_estado" => "filled|string",
            
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
