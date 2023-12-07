<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaCabBoletaHistorico extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_cab_boleta_historico';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'cbh_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'cbh_id','cbh_per_id','cbh_pc_id','cbh_ca_id','cbh_es_id','cbh_afp_id','cbh_tp_id','cbh_cod_banco','cbh_num_cta','cbh_ta_id','cbh_tipo_aportante','cbh_tipo_func','cbh_ti_item','cbh_tipo_gasto','cbh_fecha_proceso','cbh_secuencial','cbh_asignacion','cbh_tipo_baja','cbh_estado'
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
				CAST(cbh_id AS TEXT) LIKE ?  OR 
				cbh_num_cta LIKE ?  OR 
				cbh_tipo_func LIKE ?  OR 
				cbh_ti_item LIKE ?  OR 
				cbh_tipo_gasto LIKE ?  OR 
				cbh_asignacion LIKE ?  OR 
				cbh_tipo_baja LIKE ?  OR 
				cbh_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"cbh_id",
			"cbh_per_id",
			"cbh_pc_id",
			"cbh_ca_id",
			"cbh_es_id",
			"cbh_afp_id",
			"cbh_tp_id",
			"cbh_cod_banco",
			"cbh_num_cta",
			"cbh_ta_id",
			"cbh_tipo_aportante",
			"cbh_tipo_func",
			"cbh_ti_item",
			"cbh_tipo_gasto",
			"cbh_fecha_proceso",
			"cbh_secuencial",
			"cbh_asignacion",
			"cbh_tipo_baja",
			"cbh_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"cbh_id",
			"cbh_per_id",
			"cbh_pc_id",
			"cbh_ca_id",
			"cbh_es_id",
			"cbh_afp_id",
			"cbh_tp_id",
			"cbh_cod_banco",
			"cbh_num_cta",
			"cbh_ta_id",
			"cbh_tipo_aportante",
			"cbh_tipo_func",
			"cbh_ti_item",
			"cbh_tipo_gasto",
			"cbh_fecha_proceso",
			"cbh_secuencial",
			"cbh_asignacion",
			"cbh_tipo_baja",
			"cbh_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"cbh_id",
			"cbh_per_id",
			"cbh_pc_id",
			"cbh_ca_id",
			"cbh_es_id",
			"cbh_afp_id",
			"cbh_tp_id",
			"cbh_cod_banco",
			"cbh_num_cta",
			"cbh_ta_id",
			"cbh_tipo_aportante",
			"cbh_tipo_func",
			"cbh_ti_item",
			"cbh_tipo_gasto",
			"cbh_fecha_proceso",
			"cbh_secuencial",
			"cbh_asignacion",
			"cbh_tipo_baja",
			"cbh_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"cbh_id",
			"cbh_per_id",
			"cbh_pc_id",
			"cbh_ca_id",
			"cbh_es_id",
			"cbh_afp_id",
			"cbh_tp_id",
			"cbh_cod_banco",
			"cbh_num_cta",
			"cbh_ta_id",
			"cbh_tipo_aportante",
			"cbh_tipo_func",
			"cbh_ti_item",
			"cbh_tipo_gasto",
			"cbh_fecha_proceso",
			"cbh_secuencial",
			"cbh_asignacion",
			"cbh_tipo_baja",
			"cbh_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"cbh_id",
			"cbh_per_id",
			"cbh_pc_id",
			"cbh_ca_id",
			"cbh_es_id",
			"cbh_afp_id",
			"cbh_tp_id",
			"cbh_cod_banco",
			"cbh_num_cta",
			"cbh_ta_id",
			"cbh_tipo_aportante",
			"cbh_tipo_func",
			"cbh_ti_item",
			"cbh_tipo_gasto",
			"cbh_fecha_proceso",
			"cbh_secuencial",
			"cbh_asignacion",
			"cbh_tipo_baja",
			"cbh_estado" 
		];
	}
}
