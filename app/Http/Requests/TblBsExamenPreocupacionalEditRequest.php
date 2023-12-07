<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBsExamenPreocupacionalEditRequest extends FormRequest
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
            
				"exp_id" => "filled|numeric",
				"exp_per_id" => "nullable|numeric",
				"exp_fecha_elab" => "nullable|date",
				"exp_carts_puesto" => "nullable",
				"exp_fecha_examen" => "nullable|date",
				"exp_estado" => "nullable|string",
				"exp_diagnostico" => "nullable",
				"exp_comentario" => "nullable",
				"exp_recomendaciones" => "nullable",
				"exp_fecha_recep_funcionario" => "nullable|date",
				"exp_n_historia_clinica" => "nullable|numeric",
				"exp_medico" => "nullable|string",
				"exp_n_autorizacion" => "nullable|numeric",
				"exp_convenio" => "nullable|string",
				"exp_fecha_prog" => "nullable|date",
				"exp_tel_of_fun" => "nullable|string",
				"exp_tel_dom_fun" => "nullable|string",
				"exp_obsaut" => "nullable|string",
				"exp_importe" => "nullable|numeric",
				"exp_tipo_sangre" => "nullable|string",
				"exp_correlativo_gestion_n_autorizacion" => "nullable|numeric",
				"exp_correlativo_fecha_registro_n_autorizacion" => "nullable|date",
				"exp_as_id" => "nullable|numeric",
            
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
