<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBsAsignacionBeneficioEditRequest extends FormRequest
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
            
				"ab_aeb_id" => "filled|numeric",
				"ab_fa_id" => "filled|numeric",
				"ab_fecha_inicio" => "filled|date",
				"ab_fecha_fin" => "filled|date",
				"ab_estado" => "filled|string",
				"ab_tipo_beneficiario" => "nullable|string",
            
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
