<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPcPrecontratado extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pc_precontratado';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'pre_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pre_per_id','pre_fecha_inicio','pre_fecha_fin','pre_tiempo','pre_pl_id','pre_fr_id','pre_p_id','pre_presenta_djbr','pre_afp','pre_obj_puesto','pre_tareas','pre_numero_item','pre_estado','pre_fecha_sipasse','pre_fecha_djbr'
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
				CAST(pre_id AS TEXT) LIKE ?  OR 
				pre_afp LIKE ?  OR 
				pre_obj_puesto LIKE ?  OR 
				pre_tareas LIKE ?  OR 
				pre_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"pre_id",
			"pre_per_id",
			"pre_fecha_inicio",
			"pre_fecha_fin",
			"pre_tiempo",
			"pre_pl_id",
			"pre_fr_id",
			"pre_p_id",
			"pre_presenta_djbr",
			"pre_afp",
			"pre_obj_puesto",
			"pre_tareas",
			"pre_numero_item",
			"pre_estado",
			"pre_fecha_sipasse",
			"pre_fecha_djbr" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"pre_id",
			"pre_per_id",
			"pre_fecha_inicio",
			"pre_fecha_fin",
			"pre_tiempo",
			"pre_pl_id",
			"pre_fr_id",
			"pre_p_id",
			"pre_presenta_djbr",
			"pre_afp",
			"pre_obj_puesto",
			"pre_tareas",
			"pre_numero_item",
			"pre_estado",
			"pre_fecha_sipasse",
			"pre_fecha_djbr" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"pre_id",
			"pre_per_id",
			"pre_fecha_inicio",
			"pre_fecha_fin",
			"pre_tiempo",
			"pre_pl_id",
			"pre_fr_id",
			"pre_p_id",
			"pre_presenta_djbr",
			"pre_afp",
			"pre_obj_puesto",
			"pre_tareas",
			"pre_numero_item",
			"pre_estado",
			"pre_fecha_sipasse",
			"pre_fecha_djbr" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"pre_id",
			"pre_per_id",
			"pre_fecha_inicio",
			"pre_fecha_fin",
			"pre_tiempo",
			"pre_pl_id",
			"pre_fr_id",
			"pre_p_id",
			"pre_presenta_djbr",
			"pre_afp",
			"pre_obj_puesto",
			"pre_tareas",
			"pre_numero_item",
			"pre_estado",
			"pre_fecha_sipasse",
			"pre_fecha_djbr" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"pre_id",
			"pre_per_id",
			"pre_fecha_inicio",
			"pre_fecha_fin",
			"pre_tiempo",
			"pre_pl_id",
			"pre_fr_id",
			"pre_p_id",
			"pre_presenta_djbr",
			"pre_afp",
			"pre_obj_puesto",
			"pre_tareas",
			"pre_numero_item",
			"pre_estado",
			"pre_fecha_sipasse",
			"pre_fecha_djbr" 
		];
	}
}
