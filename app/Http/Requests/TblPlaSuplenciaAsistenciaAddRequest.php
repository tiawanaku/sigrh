<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaSuplenciaAsistenciaAddRequest extends FormRequest
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
            
				"plasupasist_id" => "required|numeric",
				"plasupasist_dias_trabajados" => "nullable|numeric",
				"plasupasist_mes" => "nullable|numeric",
				"plasupasist_gestion" => "nullable|numeric",
				"plasupasist_per_id_control_personal" => "nullable|numeric",
				"plasupasist_per_id" => "nullable|numeric",
				"plasupasist_per_id_responsable" => "nullable|numeric",
            
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
