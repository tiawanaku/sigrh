<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpNivelEscalaEditRequest extends FormRequest
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
            
				"ne_id" => "filled|numeric",
				"ne_descripcion" => "filled|string",
				"ne_sub_descripcion" => "nullable|string",
				"ne_secuencial" => "filled|numeric",
				"ne_estado" => "filled|string",
				"ne_pr_id" => "nullable|numeric",
				"ne_categoria" => "nullable|string",
				"ne_nivel_interno" => "nullable|numeric",
            
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
