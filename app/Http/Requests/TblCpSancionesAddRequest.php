<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpSancionesAddRequest extends FormRequest
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
            
				"sa_id" => "required|numeric",
				"sa_per_id" => "required|numeric",
				"sa_factor" => "required|numeric",
				"sa_minutos" => "nullable|numeric",
				"sa_fecha_inicio" => "nullable|date",
				"sa_fecha_fin" => "nullable|date",
				"sa_tipo_sancion" => "required|string",
				"sa_dias_sancion" => "required|numeric",
				"sa_estado" => "nullable|string",
            
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
