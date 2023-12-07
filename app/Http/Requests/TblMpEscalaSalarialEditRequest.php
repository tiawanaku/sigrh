<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpEscalaSalarialEditRequest extends FormRequest
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
            
				"es_id" => "filled|numeric",
				"es_pr_id" => "filled|numeric",
				"es_ns_id" => "filled|numeric",
				"es_escalafon" => "filled|string",
				"es_descripcion" => "filled|string",
				"es_estado" => "filled|string",
				"es_ne_id" => "filled|numeric",
				"es_rf_id" => "filled|numeric",
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
