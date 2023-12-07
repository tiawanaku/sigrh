<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblRfsResultadosEspecificosEditRequest extends FormRequest
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
            
				"re_poai_id" => "nullable|numeric",
				"re_descripcion" => "filled|string",
				"re_puntaje" => "filled|string",
				"re_indicador" => "filled|string",
				"re_estado" => "filled|string",
            
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
