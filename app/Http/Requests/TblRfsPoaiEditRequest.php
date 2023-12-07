<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblRfsPoaiEditRequest extends FormRequest
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
            
				"poai_rs_id" => "nullable|numeric",
				"poai_per_id" => "nullable|numeric",
				"poai_objetivo" => "filled|string",
				"poai_formaci_n_profesional" => "filled|string",
				"poai_estado" => "filled|string",
            
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
