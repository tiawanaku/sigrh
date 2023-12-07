<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblSalDevolucionSancionesEditRequest extends FormRequest
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
            
				"dev_id" => "filled|numeric",
				"dev_per_id" => "filled",
				"dev_cod_proceso" => "filled|numeric",
				"dev_cod_cargo" => "filled|numeric",
				"dev_secuencial" => "filled|numeric",
				"dev_tipo_fun" => "filled|string",
				"dev_prefijo" => "filled|string",
				"dev_tipo_aportante" => "filled|numeric",
				"dev_beneficiario" => "filled|string",
				"dev_cod_sancion" => "filled|numeric",
				"dev_dias_sancion" => "filled|numeric",
				"dev_dias_devolucion" => "filled|numeric",
				"dev_motivo_devolucion" => "nullable|string",
				"dev_tipo_doc" => "filled|string",
				"dev_num_doc" => "filled|string",
				"dev_estado" => "filled|string",
				"dev_fecha_registro" => "filled|date",
				"dev_usuario_registro" => "filled|numeric",
				"dev_fecha_salarios" => "nullable|date",
				"dev_usuario_planilla" => "nullable|numeric",
				"dev_nro_planilla" => "nullable|numeric",
				"dev_nro_planilla_salarios" => "nullable|numeric",
				"dev_basico" => "filled|numeric",
            
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
