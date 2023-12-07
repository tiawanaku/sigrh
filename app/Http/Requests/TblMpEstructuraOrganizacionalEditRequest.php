<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpEstructuraOrganizacionalEditRequest extends FormRequest
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
            
				"eo_id" => "filled|numeric",
				"eo_pr_id" => "filled|numeric",
				"eo_cp_id" => "nullable|numeric",
				"eo_prog" => "filled|numeric",
				"eo_sprog" => "filled|numeric",
				"eo_proy" => "filled|numeric",
				"eo_obract" => "filled|numeric",
				"eo_unidad" => "filled|numeric",
				"eo_descripcion" => "filled|string",
				"eo_estado" => "filled|string",
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
