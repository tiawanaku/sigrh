<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPcFrecuencias extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pc_frecuencias';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'fr_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'fr_es_id','fr_tiempo','fr_cp_id','fr_pu_descripcion','fr_estado','fr_observaciones','fr_cod_poa','fr_fecha_inicio','fr_fecha_fin','fr_id_anterior','fr_tiempo_original','fr_tipo_jornada','fr_obj_puesto'
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
				CAST(fr_id AS TEXT) LIKE ?  OR 
				fr_pu_descripcion LIKE ?  OR 
				fr_estado LIKE ?  OR 
				fr_observaciones LIKE ?  OR 
				fr_tipo_jornada LIKE ?  OR 
				fr_obj_puesto LIKE ? 
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
			"fr_id",
			"fr_es_id",
			"fr_tiempo",
			"fr_cp_id",
			"fr_pu_descripcion",
			"fr_estado",
			"fr_observaciones",
			"fr_cod_poa",
			"fr_fecha_inicio",
			"fr_fecha_fin",
			"fr_id_anterior",
			"fr_tiempo_original",
			"fr_tipo_jornada",
			"fr_obj_puesto" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"fr_id",
			"fr_es_id",
			"fr_tiempo",
			"fr_cp_id",
			"fr_pu_descripcion",
			"fr_estado",
			"fr_observaciones",
			"fr_cod_poa",
			"fr_fecha_inicio",
			"fr_fecha_fin",
			"fr_id_anterior",
			"fr_tiempo_original",
			"fr_tipo_jornada",
			"fr_obj_puesto" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"fr_id",
			"fr_es_id",
			"fr_tiempo",
			"fr_cp_id",
			"fr_pu_descripcion",
			"fr_estado",
			"fr_observaciones",
			"fr_cod_poa",
			"fr_fecha_inicio",
			"fr_fecha_fin",
			"fr_id_anterior",
			"fr_tiempo_original",
			"fr_tipo_jornada",
			"fr_obj_puesto" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"fr_id",
			"fr_es_id",
			"fr_tiempo",
			"fr_cp_id",
			"fr_pu_descripcion",
			"fr_estado",
			"fr_observaciones",
			"fr_cod_poa",
			"fr_fecha_inicio",
			"fr_fecha_fin",
			"fr_id_anterior",
			"fr_tiempo_original",
			"fr_tipo_jornada",
			"fr_obj_puesto" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"fr_id",
			"fr_es_id",
			"fr_tiempo",
			"fr_cp_id",
			"fr_pu_descripcion",
			"fr_estado",
			"fr_observaciones",
			"fr_cod_poa",
			"fr_fecha_inicio",
			"fr_fecha_fin",
			"fr_id_anterior",
			"fr_tiempo_original",
			"fr_tipo_jornada",
			"fr_obj_puesto" 
		];
	}
}
