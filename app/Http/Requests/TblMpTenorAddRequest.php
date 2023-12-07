<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpTenorAddRequest extends FormRequest
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
            
				"te_id" => "required|numeric",
				"te_tipo_reg" => "required|string",
				"te_descripcion" => "nullable|string",
				"te_contenido" => "nullable",
				"te_estado" => "nullable|string",
				"te_usuario_creacion" => "nullable|numeric",
				"te_fecha_creacion" => "nullable|date",
				"te_fecha_modificacion" => "nullable|date",
            
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
