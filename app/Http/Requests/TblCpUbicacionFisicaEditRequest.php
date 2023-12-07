<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblCpUbicacionFisicaEditRequest extends FormRequest
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
            
				"uf_id" => "filled|numeric",
				"uf_per_id" => "filled|numeric",
				"uf_edificio" => "filled|numeric",
				"uf_piso" => "nullable|string",
				"uf_bloque" => "nullable|string",
				"uf_telefono_interno" => "nullable|numeric",
				"uf_telefono_oficina" => "nullable|numeric",
				"uf_nombre_oficina" => "nullable|string",
				"uf_fecha_inicio" => "filled|date",
				"uf_fecha_final" => "nullable|date",
				"uf_estado" => "filled|string",
            
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
