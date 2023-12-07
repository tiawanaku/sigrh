<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPsProccoactfiscEditRequest extends FormRequest
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
            
				"pca_id_proccoactfisc" => "filled|numeric",
				"pca_per_id" => "nullable|numeric",
				"pca_secuencial" => "nullable|numeric",
				"pca_sujeto_procesal" => "nullable|string",
				"pca_nota_cargo" => "nullable|string",
				"pca_monto_act" => "nullable|numeric",
				"pca_total_rec" => "nullable|numeric",
				"pca_estado_proceso" => "nullable",
				"pca_juzgado" => "nullable|string",
				"pca_tipo" => "nullable|string",
				"pca_estado" => "nullable|string",
				"pca_fecha_registro" => "nullable|date",
            
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
