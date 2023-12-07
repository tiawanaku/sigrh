<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblEscalaPuestoEditRequest extends FormRequest
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
            
				"epu_id" => "filled|numeric",
				"epu_es_id" => "filled|numeric",
				"epu_p_id" => "filled|numeric",
				"epu_tipo" => "nullable|string",
				"epu_estado" => "filled|string",
            
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
