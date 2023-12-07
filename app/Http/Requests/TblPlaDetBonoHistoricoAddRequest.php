<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaDetBonoHistoricoAddRequest extends FormRequest
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
            
				"dboh_id" => "required|numeric",
				"dboh_dbh_id" => "required|numeric",
				"dboh_cs_id" => "nullable|numeric",
				"dboh_factorhaberbasico" => "required|numeric",
				"dboh_fechacas" => "required|date",
				"dboh_observacion" => "required|string",
				"dboh_tiporegistro" => "required|string",
				"dboh_diasbono" => "required|numeric",
				"dboh_porcentajeanterior" => "required|numeric",
				"dboh_porcentajevigente" => "required|numeric",
				"dboh_adecuacion" => "required|string",
				"dboh_montobono" => "required|numeric",
				"dboh_factorreintegrobono" => "required|numeric",
				"dboh_estado" => "nullable|string",
            
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
