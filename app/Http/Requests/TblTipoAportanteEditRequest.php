<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblTipoAportanteEditRequest extends FormRequest
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
            
				"ta_id" => "filled|numeric",
				"ta_lab_cotizacion_mensual" => "filled|numeric",
				"ta_lab_prima_riesgo_comun" => "filled|numeric",
				"ta_lab_comision_afp" => "filled|numeric",
				"ta_lab_solidario" => "filled|numeric",
				"ta_pat_prima_riesgo_prof" => "filled|numeric",
				"ta_pat_solidario" => "filled|numeric",
				"ta_pat_caja" => "filled|numeric",
				"ta_pat_provivienda" => "filled|numeric",
				"ta_descripcion" => "filled|string",
				"ta_estado" => "filled|string",
            
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
