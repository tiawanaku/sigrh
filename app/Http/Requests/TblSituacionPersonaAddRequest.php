<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblSituacionPersonaAddRequest extends FormRequest
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
            
				"st_id" => "required|numeric",
				"st_per_id" => "nullable|numeric",
				"st_tipo_situacion" => "nullable|string",
				"st_fecha_inicio" => "nullable|date",
				"st_fecha_fin" => "nullable|date",
				"st_estado" => "nullable|string",
				"st_usuario_creacion" => "nullable|numeric",
				"st_fecha_creacion" => "nullable|date",
            
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
