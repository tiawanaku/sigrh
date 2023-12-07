<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaTransaccionesEditRequest extends FormRequest
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
            
				"tr_pc_id" => "filled|numeric",
				"tr_per_id" => "filled|numeric",
				"tr_fa_id" => "filled|numeric",
				"tr_fecha_inicio" => "filled|date",
				"tr_fecha_fin" => "nullable|date",
				"tr_monto" => "filled|numeric",
				"tr_estado" => "filled|string",
				"tr_usuario_creacion" => "nullable|numeric",
				"tr_fecha_creacion" => "nullable|date",
            
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
