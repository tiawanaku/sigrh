<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblRangoEditRequest extends FormRequest
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
            
				"ra_id" => "filled|numeric",
				"ra_minimo" => "nullable|numeric",
				"ra_maximo" => "nullable|numeric",
				"ra_valor" => "nullable|numeric",
				"ra_tabla" => "nullable|string",
				"ra_factor" => "nullable|numeric",
				"ra_estado" => "nullable|string",
            
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
