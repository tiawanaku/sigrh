<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpEstructuraOrganizacionalAddRequest extends FormRequest
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
            
				"eo_id" => "required|numeric",
				"eo_pr_id" => "required|numeric",
				"eo_cp_id" => "nullable|numeric",
				"eo_prog" => "required|numeric",
				"eo_sprog" => "required|numeric",
				"eo_proy" => "required|numeric",
				"eo_obract" => "required|numeric",
				"eo_unidad" => "required|numeric",
				"eo_descripcion" => "required|string",
				"eo_estado" => "required|string",
				"eo_cod_superior" => "nullable|numeric",
            
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
