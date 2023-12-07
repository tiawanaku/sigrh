<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBsSeguimientoAccidenteEditRequest extends FormRequest
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
            
				"sa_id" => "filled|numeric",
				"sa_denacc_id" => "nullable|numeric",
				"sa_seguimiento" => "nullable",
				"sa_observacionesgravedad" => "nullable|string",
				"sa_total_dias_baja_medica" => "nullable|numeric",
				"sa_estado" => "nullable|string",
				"sa_fecha_segaccidente" => "nullable|date",
				"sa_marcar_accidente" => "nullable|string",
				"sa_clasif_it" => "nullable|string",
            
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
