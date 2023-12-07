<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaCasAddRequest extends FormRequest
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
            
				"cs_id" => "required|numeric",
				"cs_per_id" => "required|numeric",
				"cs_res_adm" => "required|string",
				"cs_nro_cas" => "required|string",
				"cs_fecha_cas" => "required|date",
				"cs_anos" => "required|numeric",
				"cs_meses" => "required|numeric",
				"cs_dias" => "required|numeric",
				"cs_tipo_reg" => "required|string",
				"cs_procesado" => "required|string",
				"cs_estado" => "required|string",
            
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
