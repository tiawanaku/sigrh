<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblKdAsignacionVacacionEditRequest extends FormRequest
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
            
				"va_id" => "filled|numeric",
				"va_per_id" => "nullable|numeric",
				"va_gestion_inicio" => "nullable|numeric",
				"va_gestion_fin" => "nullable|numeric",
				"va_dias_ley" => "nullable|numeric",
				"va_dias_restantes" => "nullable|numeric",
				"va_horas_restantes" => "nullable|numeric",
				"va_fecha_ingreso_r" => "nullable|date",
				"va_anio" => "nullable|numeric",
				"va_estado" => "nullable|string",
				"va_usuario_creacion" => "nullable|numeric",
				"va_fecha_creacion" => "nullable|date",
            
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
