<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblMpTipoItemEditRequest extends FormRequest
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
            
				"ti_item" => "filled|string",
				"ti_descripcion" => "filled|string",
				"ti_estado" => "filled|string",
				"ti_tipo" => "filled|string",
				"ti_item_suplencia" => "nullable|string",
				"ti_orden" => "filled|numeric",
				"ti_tipo_pago" => "filled|string",
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
