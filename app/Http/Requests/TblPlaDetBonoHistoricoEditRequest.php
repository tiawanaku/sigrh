<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaDetBonoHistoricoEditRequest extends FormRequest
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
            
				"dboh_id" => "filled|numeric",
				"dboh_dbh_id" => "filled|numeric",
				"dboh_cs_id" => "nullable|numeric",
				"dboh_factorhaberbasico" => "filled|numeric",
				"dboh_fechacas" => "filled|date",
				"dboh_observacion" => "filled|string",
				"dboh_tiporegistro" => "filled|string",
				"dboh_diasbono" => "filled|numeric",
				"dboh_porcentajeanterior" => "filled|numeric",
				"dboh_porcentajevigente" => "filled|numeric",
				"dboh_adecuacion" => "filled|string",
				"dboh_montobono" => "filled|numeric",
				"dboh_factorreintegrobono" => "filled|numeric",
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
