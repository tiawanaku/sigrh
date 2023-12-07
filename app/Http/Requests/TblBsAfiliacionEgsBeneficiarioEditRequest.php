<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblBsAfiliacionEgsBeneficiarioEditRequest extends FormRequest
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
            
				"aeb_ae_id" => "nullable|numeric",
				"aeb_pf_id" => "nullable|numeric",
				"aeb_fecha_afi" => "nullable|date",
				"aeb_afi_por" => "nullable|string",
				"aeb_estado" => "nullable|string",
            
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
