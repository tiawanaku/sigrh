<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBsAfpEditRequest extends FormRequest
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
            
				"afp_per_id" => "filled",
				"afp_previsora" => "filled|string",
				"afp_nua" => "nullable|string",
				"afp_fecha_filiacion" => "filled|date",
				"afp_fecha_modificacion" => "nullable|date",
				"afp_motivo_modificacion" => "nullable|string",
				"afp_fecha_registro" => "nullable|date",
				"afp_estado_carnet" => "nullable|string",
				"afp_fecha_carnet" => "nullable|date",
				"afp_usuario" => "filled|numeric",
				"afp_estado" => "filled|string",
            
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
