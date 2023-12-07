<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpBitacoraDispositivoEditRequest extends FormRequest
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
            
				"bd_id" => "filled|numeric",
				"bd_di_id" => "filled",
				"bd_fecha" => "filled|date",
				"bd_estado_com_abrir" => "filled|string",
				"bd_estado_exp_archivo" => "nullable|string",
				"bd_marcas_leidas" => "nullable|numeric",
				"bd_marcas_descargadas" => "nullable|numeric",
				"bd_estado_com_cerrar" => "filled|string",
				"bd_estado_exito" => "nullable|string",
				"bd_observaciones" => "nullable|string",
            
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
