<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblKdSolicitudVacacionAddRequest extends FormRequest
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
            
				"vac_per_id" => "required|numeric",
				"vac_a_partir" => "nullable|date",
				"vac_hasta" => "nullable|date",
				"vac_va_id" => "nullable",
				"vac_nro_dias_vacacion" => "nullable|string",
				"vac_observacion" => "nullable|string",
				"vac_estado" => "nullable|string",
				"vac_motivo_anulado" => "nullable|string",
				"vac_fecha_anulado" => "nullable|date",
				"vac_correlativo" => "nullable|numeric",
				"vac_usuario_creacion" => "nullable|numeric",
				"vac_fecha_creacion" => "nullable|date",
				"vac_lj_id" => "nullable|numeric",
            
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
