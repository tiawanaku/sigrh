<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPsAisa extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_ps_aisa';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ps_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ps_id','ps_per_id','ps_secuencial','ps_n_sitram','ps_numero','ps_gestion','ps_causa','ps_fecha_creacion','ps_doc_adjunta','ps_fecha_ejecucion_sancion','ps_tipo_resolucion','ps_resolucion','ps_fecha_resolucion','ps_estado','ps_id_sancion','ps_unidad_organizacional'
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
				CAST(ps_id AS TEXT) LIKE ?  OR 
				ps_numero LIKE ?  OR 
				ps_causa LIKE ?  OR 
				ps_doc_adjunta LIKE ?  OR 
				ps_resolucion LIKE ?  OR 
				ps_unidad_organizacional LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"ps_id",
			"ps_per_id",
			"ps_secuencial",
			"ps_n_sitram",
			"ps_numero",
			"ps_gestion",
			"ps_causa",
			"ps_fecha_creacion",
			"ps_doc_adjunta",
			"ps_fecha_ejecucion_sancion",
			"ps_tipo_resolucion",
			"ps_resolucion",
			"ps_fecha_resolucion",
			"ps_estado",
			"ps_id_sancion",
			"ps_unidad_organizacional" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ps_id",
			"ps_per_id",
			"ps_secuencial",
			"ps_n_sitram",
			"ps_numero",
			"ps_gestion",
			"ps_causa",
			"ps_fecha_creacion",
			"ps_doc_adjunta",
			"ps_fecha_ejecucion_sancion",
			"ps_tipo_resolucion",
			"ps_resolucion",
			"ps_fecha_resolucion",
			"ps_estado",
			"ps_id_sancion",
			"ps_unidad_organizacional" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ps_id",
			"ps_per_id",
			"ps_secuencial",
			"ps_n_sitram",
			"ps_numero",
			"ps_gestion",
			"ps_causa",
			"ps_fecha_creacion",
			"ps_doc_adjunta",
			"ps_fecha_ejecucion_sancion",
			"ps_tipo_resolucion",
			"ps_resolucion",
			"ps_fecha_resolucion",
			"ps_estado",
			"ps_id_sancion",
			"ps_unidad_organizacional" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ps_id",
			"ps_per_id",
			"ps_secuencial",
			"ps_n_sitram",
			"ps_numero",
			"ps_gestion",
			"ps_causa",
			"ps_fecha_creacion",
			"ps_doc_adjunta",
			"ps_fecha_ejecucion_sancion",
			"ps_tipo_resolucion",
			"ps_resolucion",
			"ps_fecha_resolucion",
			"ps_estado",
			"ps_id_sancion",
			"ps_unidad_organizacional" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ps_id",
			"ps_per_id",
			"ps_secuencial",
			"ps_n_sitram",
			"ps_numero",
			"ps_gestion",
			"ps_causa",
			"ps_fecha_creacion",
			"ps_doc_adjunta",
			"ps_fecha_ejecucion_sancion",
			"ps_tipo_resolucion",
			"ps_resolucion",
			"ps_fecha_resolucion",
			"ps_estado",
			"ps_id_sancion",
			"ps_unidad_organizacional" 
		];
	}
}
