<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaFactorAddRequest extends FormRequest
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
            
				"fa_id" => "required|numeric",
				"fa_descripcion" => "required|string",
				"fa_signo" => "nullable|string",
				"fa_ac_id" => "nullable|numeric",
				"fa_tipo_calculo" => "nullable|string",
				"fa_valor" => "nullable|numeric",
				"fa_tipo" => "nullable|string",
				"fa_orden" => "nullable|numeric",
				"fa_estado" => "required|string",
            
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
