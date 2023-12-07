<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpTipoItemAddRequest extends FormRequest
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
            
				"ti_item" => "required|string",
				"ti_descripcion" => "required|string",
				"ti_estado" => "required|string",
				"ti_tipo" => "required|string",
				"ti_item_suplencia" => "nullable|string",
				"ti_orden" => "required|numeric",
				"ti_tipo_pago" => "required|string",
				"ti_control" => "nullable|string",
				"ti_tipo_item_gral" => "nullable|string",
            
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
