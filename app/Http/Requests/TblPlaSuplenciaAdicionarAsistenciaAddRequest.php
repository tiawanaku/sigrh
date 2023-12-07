<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaSuplenciaAdicionarAsistenciaAddRequest extends FormRequest
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
            
				"plasupadasist_id" => "required|numeric",
				"plasupadasist_plasup_id" => "nullable|numeric",
				"plasupadasist_plasupasist_id" => "nullable|numeric",
				"plasupadasist_fecha_recep_plaasist" => "nullable|date",
				"plasupadasist_estado" => "nullable|string",
            
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
