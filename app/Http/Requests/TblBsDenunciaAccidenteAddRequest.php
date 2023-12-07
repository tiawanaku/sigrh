<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBsDenunciaAccidenteAddRequest extends FormRequest
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
            
				"denacc_id" => "required|numeric",
				"denacc_per_id" => "required|numeric",
				"denacc_fecha_denunciaacc" => "nullable|date",
				"denacc_lugar_accidente" => "nullable|string",
				"denacc_fecha_accidente" => "nullable|date",
				"denacc_ocurrio_accidente" => "nullable",
				"denacc_causas_accidente" => "nullable",
				"denacc_labor_accidente" => "nullable",
				"denacc_atencion_accidente" => "nullable",
				"denacc_estado" => "nullable|string",
				"denacc_clase_accidente" => "nullable|string",
				"denacc_diag_accidente" => "nullable",
				"denacc_trat_accidente" => "nullable",
				"denacc_testigo_primero" => "nullable|string",
				"denacc_testigo_segundo" => "nullable|string",
				"denacc_ubicacion_verdadera" => "nullable|string",
				"denacc_as_id" => "nullable|numeric",
				"denacc_estado_tramite" => "nullable|string",
            
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
