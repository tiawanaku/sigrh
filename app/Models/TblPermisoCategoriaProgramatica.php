<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPermisoCategoriaProgramatica extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_permiso_categoria_programatica';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'pcp_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pcp_rol','pcp_ue','pcp_cp_id','pcp_estado','pcp_us_id','pcp_pr_id','pcp_fecha_asignacion','pcp_fecha_baja'
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
				CAST(pcp_id AS TEXT) LIKE ?  OR 
				pcp_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%"
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
			"pcp_id",
			"pcp_rol",
			"pcp_ue",
			"pcp_cp_id",
			"pcp_estado",
			"pcp_us_id",
			"pcp_pr_id",
			"pcp_fecha_asignacion",
			"pcp_fecha_baja" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"pcp_id",
			"pcp_rol",
			"pcp_ue",
			"pcp_cp_id",
			"pcp_estado",
			"pcp_us_id",
			"pcp_pr_id",
			"pcp_fecha_asignacion",
			"pcp_fecha_baja" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"pcp_id",
			"pcp_rol",
			"pcp_ue",
			"pcp_cp_id",
			"pcp_estado",
			"pcp_us_id",
			"pcp_pr_id",
			"pcp_fecha_asignacion",
			"pcp_fecha_baja" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"pcp_id",
			"pcp_rol",
			"pcp_ue",
			"pcp_cp_id",
			"pcp_estado",
			"pcp_us_id",
			"pcp_pr_id",
			"pcp_fecha_asignacion",
			"pcp_fecha_baja" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"pcp_id",
			"pcp_rol",
			"pcp_ue",
			"pcp_cp_id",
			"pcp_estado",
			"pcp_us_id",
			"pcp_pr_id",
			"pcp_fecha_asignacion",
			"pcp_fecha_baja" 
		];
	}
}
