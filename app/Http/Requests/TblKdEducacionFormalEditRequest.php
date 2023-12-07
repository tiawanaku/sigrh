<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblKdEducacionFormalEditRequest extends FormRequest
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
            
				"ef_per_id" => "nullable|numeric",
				"ef_nivel_instruccion" => "nullable|numeric",
				"ef_centro_form" => "nullable|string",
				"ef_carrera_especialidad" => "nullable|numeric",
				"ef_fecha_ini" => "nullable|date",
				"ef_fecha_fin" => "nullable|date",
				"ef_anios_estudio" => "nullable|numeric",
				"ef_titulo_obtenido" => "nullable|numeric",
				"ef_fecha_titulo_obtenido" => "nullable|date",
				"ef_nro_titulo" => "nullable|string",
				"ef_estado" => "nullable|string",
            
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
