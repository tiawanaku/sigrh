<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblDjbrAcreditacionAddRequest extends FormRequest
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
            
				"djbracred_id" => "required|numeric",
				"djbracred_cd" => "nullable|string",
				"djbracred_fecha_declaracion" => "nullable|date",
				"djbracred_motivo" => "nullable|string",
				"djbracred_fecha_acreditacion" => "nullable|date",
				"djbracred_cumplimiento" => "nullable|string",
				"djbracred_tipo_acreditacion" => "nullable|string",
				"djbracred_proxima_acreditacion" => "nullable|numeric",
				"djbracred_per_id" => "nullable|numeric",
				"djbracred_as_id" => "nullable|numeric",
				"djbracred_gestion" => "nullable|numeric",
            
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
