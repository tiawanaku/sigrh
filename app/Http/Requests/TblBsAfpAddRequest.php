<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBsAfpAddRequest extends FormRequest
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
            
				"afp_per_id" => "required",
				"afp_previsora" => "required|string",
				"afp_nua" => "nullable|string",
				"afp_fecha_filiacion" => "required|date",
				"afp_fecha_modificacion" => "nullable|date",
				"afp_motivo_modificacion" => "nullable|string",
				"afp_fecha_registro" => "nullable|date",
				"afp_estado_carnet" => "nullable|string",
				"afp_fecha_carnet" => "nullable|date",
				"afp_usuario" => "required|numeric",
				"afp_estado" => "required|string",
            
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
