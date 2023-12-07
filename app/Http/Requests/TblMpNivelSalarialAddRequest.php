<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpNivelSalarialAddRequest extends FormRequest
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
            
				"ns_id" => "required|numeric",
				"ns_clase" => "required|string",
				"ns_nivel" => "required|string",
				"ns_descripcion" => "required|string",
				"ns_haber_basico" => "required|numeric",
				"ns_estado" => "required|string",
				"ns_incremento" => "nullable|numeric",
				"ns_pr_id" => "nullable|numeric",
            
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
