<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPcSeguimientoEditRequest extends FormRequest
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
            
				"seg_pk_id" => "nullable|numeric",
				"seg_us_id_remitente" => "nullable|numeric",
				"seg_accion" => "nullable|string",
				"seg_us_id_recepcion" => "nullable|numeric",
				"seg_observaciones" => "nullable",
				"seg_tabla" => "nullable|string",
				"seg_fecha" => "nullable|date",
            
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
