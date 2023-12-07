<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpEscalaSalarialAddRequest extends FormRequest
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
            
				"es_id" => "required|numeric",
				"es_pr_id" => "required|numeric",
				"es_ns_id" => "required|numeric",
				"es_escalafon" => "required|string",
				"es_descripcion" => "required|string",
				"es_estado" => "required|string",
				"es_ne_id" => "required|numeric",
				"es_rf_id" => "required|numeric",
				"es_categoria" => "nullable|string",
            
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
