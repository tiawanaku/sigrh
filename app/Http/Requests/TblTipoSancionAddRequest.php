<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblTipoSancionAddRequest extends FormRequest
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
            
				"ts_id" => "required|numeric",
				"ts_tiempominimo" => "nullable|numeric",
				"ts_tiempomaximo" => "nullable|numeric",
				"ts_fa_id" => "required|numeric",
				"ts_sanciondias" => "nullable|numeric",
				"ts_descripcion" => "required|string",
				"ts_estado" => "required|string",
            
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
