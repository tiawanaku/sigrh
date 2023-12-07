<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpHorarioEspecialEditRequest extends FormRequest
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
            
				"he_id" => "filled|numeric",
				"he_per_id" => "filled|numeric",
				"he_tipo_horario" => "filled|numeric",
				"he_fecha" => "filled|date",
				"he_ing1" => "filled|string",
				"he_sal1" => "nullable|string",
				"he_ing2" => "nullable|string",
				"he_sal2" => "nullable|string",
				"he_autoriza" => "filled|string",
				"he_documento" => "filled|string",
				"he_descripcion" => "filled|string",
				"he_estado" => "filled|string",
            
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
