<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaCasEditRequest extends FormRequest
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
            
				"cs_id" => "filled|numeric",
				"cs_per_id" => "filled|numeric",
				"cs_res_adm" => "filled|string",
				"cs_nro_cas" => "filled|string",
				"cs_fecha_cas" => "filled|date",
				"cs_anos" => "filled|numeric",
				"cs_meses" => "filled|numeric",
				"cs_dias" => "filled|numeric",
				"cs_tipo_reg" => "filled|string",
				"cs_procesado" => "filled|string",
				"cs_estado" => "filled|string",
            
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
