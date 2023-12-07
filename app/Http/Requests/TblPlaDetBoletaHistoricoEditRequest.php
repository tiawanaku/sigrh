<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPlaDetBoletaHistoricoEditRequest extends FormRequest
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
            
				"dbh_id" => "filled|numeric",
				"dbh_cb_id" => "filled|numeric",
				"dbh_fa_id" => "filled|numeric",
				"dbh_valor" => "filled|numeric",
				"dbh_estado" => "nullable|string",
				"dbh_tr_id" => "nullable|numeric",
				"dbh_cs_id" => "nullable|numeric",
            
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
