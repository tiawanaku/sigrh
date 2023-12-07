<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpHorarioEspecialAddRequest extends FormRequest
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
            
				"he_id" => "required|numeric",
				"he_per_id" => "required|numeric",
				"he_tipo_horario" => "required|numeric",
				"he_fecha" => "required|date",
				"he_ing1" => "required|string",
				"he_sal1" => "nullable|string",
				"he_ing2" => "nullable|string",
				"he_sal2" => "nullable|string",
				"he_autoriza" => "required|string",
				"he_documento" => "required|string",
				"he_descripcion" => "required|string",
				"he_estado" => "required|string",
            
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
