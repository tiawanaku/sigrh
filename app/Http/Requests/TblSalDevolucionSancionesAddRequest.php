<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblSalDevolucionSancionesAddRequest extends FormRequest
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
            
				"dev_id" => "required|numeric",
				"dev_per_id" => "required",
				"dev_cod_proceso" => "required|numeric",
				"dev_cod_cargo" => "required|numeric",
				"dev_secuencial" => "required|numeric",
				"dev_tipo_fun" => "required|string",
				"dev_prefijo" => "required|string",
				"dev_tipo_aportante" => "required|numeric",
				"dev_beneficiario" => "required|string",
				"dev_cod_sancion" => "required|numeric",
				"dev_dias_sancion" => "required|numeric",
				"dev_dias_devolucion" => "required|numeric",
				"dev_motivo_devolucion" => "nullable|string",
				"dev_tipo_doc" => "required|string",
				"dev_num_doc" => "required|string",
				"dev_estado" => "required|string",
				"dev_fecha_registro" => "required|date",
				"dev_usuario_registro" => "required|numeric",
				"dev_fecha_salarios" => "nullable|date",
				"dev_usuario_planilla" => "nullable|numeric",
				"dev_nro_planilla" => "nullable|numeric",
				"dev_nro_planilla_salarios" => "nullable|numeric",
				"dev_basico" => "required|numeric",
            
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
