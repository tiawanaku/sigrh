<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblKdRespuestaComboAddRequest extends FormRequest
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
            
				"rc_id" => "required|numeric",
				"rc_rq_id" => "nullable|numeric",
				"rc_desc" => "nullable|string",
				"rc_equivalencia" => "nullable|string",
				"rc_estado" => "nullable|string",
				"rc_usuario_creacion" => "nullable|numeric",
				"rc_fecha_creacion" => "nullable|date",
            
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
