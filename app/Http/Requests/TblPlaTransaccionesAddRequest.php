<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaTransaccionesAddRequest extends FormRequest
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
            
				"tr_pc_id" => "required|numeric",
				"tr_per_id" => "required|numeric",
				"tr_fa_id" => "required|numeric",
				"tr_fecha_inicio" => "required|date",
				"tr_fecha_fin" => "nullable|date",
				"tr_monto" => "required|numeric",
				"tr_estado" => "required|string",
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
