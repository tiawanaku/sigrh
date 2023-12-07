<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblTipoSancionEditRequest extends FormRequest
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
            
				"ts_id" => "filled|numeric",
				"ts_tiempominimo" => "nullable|numeric",
				"ts_tiempomaximo" => "nullable|numeric",
				"ts_fa_id" => "filled|numeric",
				"ts_sanciondias" => "nullable|numeric",
				"ts_descripcion" => "filled|string",
				"ts_estado" => "filled|string",
            
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
