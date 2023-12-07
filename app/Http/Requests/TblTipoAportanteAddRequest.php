<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblTipoAportanteAddRequest extends FormRequest
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
            
				"ta_id" => "required|numeric",
				"ta_lab_cotizacion_mensual" => "required|numeric",
				"ta_lab_prima_riesgo_comun" => "required|numeric",
				"ta_lab_comision_afp" => "required|numeric",
				"ta_lab_solidario" => "required|numeric",
				"ta_pat_prima_riesgo_prof" => "required|numeric",
				"ta_pat_solidario" => "required|numeric",
				"ta_pat_caja" => "required|numeric",
				"ta_pat_provivienda" => "required|numeric",
				"ta_descripcion" => "required|string",
				"ta_estado" => "required|string",
            
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
