<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblKdRequisitoPresentadoEditRequest extends FormRequest
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
            
				"rp_valor_pk" => "nullable|numeric",
				"rp_nombre_pk" => "nullable|string",
				"rp_fecha_presentacion" => "nullable|date",
				"rp_estado" => "nullable|string",
				"rp_usuario_creacion" => "nullable|numeric",
				"rp_fecha_creacion" => "nullable|date",
				"rp_respuesta" => "nullable",
            
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
