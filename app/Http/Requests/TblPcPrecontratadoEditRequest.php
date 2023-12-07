<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPcPrecontratadoEditRequest extends FormRequest
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
            
				"pre_per_id" => "nullable|numeric",
				"pre_fecha_inicio" => "nullable|date",
				"pre_fecha_fin" => "nullable|date",
				"pre_tiempo" => "nullable|numeric",
				"pre_pl_id" => "nullable|numeric",
				"pre_fr_id" => "nullable|numeric",
				"pre_p_id" => "nullable|numeric",
				"pre_presenta_djbr" => "nullable|string",
				"pre_afp" => "nullable|string",
				"pre_obj_puesto" => "nullable",
				"pre_tareas" => "nullable",
				"pre_numero_item" => "nullable|numeric",
				"pre_estado" => "nullable|string",
				"pre_fecha_sipasse" => "nullable|date",
				"pre_fecha_djbr" => "nullable|date",
            
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
