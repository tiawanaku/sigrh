<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaSuplencia extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_suplencia';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'plasup_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'plasup_id','plasup_correlativo','plasup_fecha_emision','plasup_iniciales','plasup_fecha_recep_contrato','plasup_id_asig','plasup_valor_rciva','plasup_fecha_recep_valor_rciva','plasup_fecha_inicio_baja_medica','plasup_fecha_fin_baja_medica','plasup_tipo_baja_medica','plasup_salario_minimo','plasup_novedad','plasup_per_id_suplantado','plasup_correlativo_interno','plasup_gestion_correlativo_interno','plasup_afp','plasup_tipo_aportante','plasup_egs'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				CAST(plasup_id AS TEXT) LIKE ?  OR 
				plasup_correlativo LIKE ?  OR 
				plasup_iniciales LIKE ?  OR 
				plasup_tipo_baja_medica LIKE ?  OR 
				plasup_novedad LIKE ?  OR 
				plasup_afp LIKE ?  OR 
				plasup_egs LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"plasup_id",
			"plasup_correlativo",
			"plasup_fecha_emision",
			"plasup_iniciales",
			"plasup_fecha_recep_contrato",
			"plasup_id_asig",
			"plasup_valor_rciva",
			"plasup_fecha_recep_valor_rciva",
			"plasup_fecha_inicio_baja_medica",
			"plasup_fecha_fin_baja_medica",
			"plasup_tipo_baja_medica",
			"plasup_salario_minimo",
			"plasup_novedad",
			"plasup_per_id_suplantado",
			"plasup_correlativo_interno",
			"plasup_gestion_correlativo_interno",
			"plasup_afp",
			"plasup_tipo_aportante",
			"plasup_egs" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"plasup_id",
			"plasup_correlativo",
			"plasup_fecha_emision",
			"plasup_iniciales",
			"plasup_fecha_recep_contrato",
			"plasup_id_asig",
			"plasup_valor_rciva",
			"plasup_fecha_recep_valor_rciva",
			"plasup_fecha_inicio_baja_medica",
			"plasup_fecha_fin_baja_medica",
			"plasup_tipo_baja_medica",
			"plasup_salario_minimo",
			"plasup_novedad",
			"plasup_per_id_suplantado",
			"plasup_correlativo_interno",
			"plasup_gestion_correlativo_interno",
			"plasup_afp",
			"plasup_tipo_aportante",
			"plasup_egs" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"plasup_id",
			"plasup_correlativo",
			"plasup_fecha_emision",
			"plasup_iniciales",
			"plasup_fecha_recep_contrato",
			"plasup_id_asig",
			"plasup_valor_rciva",
			"plasup_fecha_recep_valor_rciva",
			"plasup_fecha_inicio_baja_medica",
			"plasup_fecha_fin_baja_medica",
			"plasup_tipo_baja_medica",
			"plasup_salario_minimo",
			"plasup_novedad",
			"plasup_per_id_suplantado",
			"plasup_correlativo_interno",
			"plasup_gestion_correlativo_interno",
			"plasup_afp",
			"plasup_tipo_aportante",
			"plasup_egs" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"plasup_id",
			"plasup_correlativo",
			"plasup_fecha_emision",
			"plasup_iniciales",
			"plasup_fecha_recep_contrato",
			"plasup_id_asig",
			"plasup_valor_rciva",
			"plasup_fecha_recep_valor_rciva",
			"plasup_fecha_inicio_baja_medica",
			"plasup_fecha_fin_baja_medica",
			"plasup_tipo_baja_medica",
			"plasup_salario_minimo",
			"plasup_novedad",
			"plasup_per_id_suplantado",
			"plasup_correlativo_interno",
			"plasup_gestion_correlativo_interno",
			"plasup_afp",
			"plasup_tipo_aportante",
			"plasup_egs" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"plasup_id",
			"plasup_correlativo",
			"plasup_fecha_emision",
			"plasup_iniciales",
			"plasup_fecha_recep_contrato",
			"plasup_id_asig",
			"plasup_valor_rciva",
			"plasup_fecha_recep_valor_rciva",
			"plasup_fecha_inicio_baja_medica",
			"plasup_fecha_fin_baja_medica",
			"plasup_tipo_baja_medica",
			"plasup_salario_minimo",
			"plasup_novedad",
			"plasup_per_id_suplantado",
			"plasup_correlativo_interno",
			"plasup_gestion_correlativo_interno",
			"plasup_afp",
			"plasup_tipo_aportante",
			"plasup_egs" 
		];
	}
}
