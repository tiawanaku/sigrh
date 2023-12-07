<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblKdVacacionPrescritoEditRequest extends FormRequest
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
            
				"vpre_va_id" => "nullable|numeric",
				"vpre_fecha_registro_prescrito" => "nullable|date",
				"vpre_nro_documento" => "nullable|string",
				"vpre_autorizado_por" => "nullable|string",
				"vpre_fecha_habilitacion_prescrito" => "nullable|date",
				"vpre_fecha_validez_prescrito" => "nullable|date",
				"vpre_estado" => "nullable|string",
				"vpre_usuario_creacion" => "nullable|numeric",
				"vpre_fecha_creacion" => "nullable|date",
            
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
