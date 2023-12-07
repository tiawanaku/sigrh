<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblRfsResultadosEspecificosAddRequest extends FormRequest
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
				"re_descripcion" => "required|string",
				"re_puntaje" => "required|string",
				"re_indicador" => "required|string",
				"re_estado" => "required|string",
            
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
