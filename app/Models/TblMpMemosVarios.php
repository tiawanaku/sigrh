<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpMemosVarios extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_memos_varios';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'mv_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'mv_id','mv_per_id','mv_datos','mv_nro_memo','mv_validacion','mv_fecha_validacion','mv_estado','mv_usuario_creacion','mv_fecha_creacion','mv_pr_id'
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
				CAST(mv_id AS TEXT) LIKE ?  OR 
				mv_datos LIKE ?  OR 
				mv_validacion LIKE ?  OR 
				mv_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"mv_id",
			"mv_per_id",
			"mv_datos",
			"mv_nro_memo",
			"mv_validacion",
			"mv_fecha_validacion",
			"mv_estado",
			"mv_usuario_creacion",
			"mv_fecha_creacion",
			"mv_pr_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"mv_id",
			"mv_per_id",
			"mv_datos",
			"mv_nro_memo",
			"mv_validacion",
			"mv_fecha_validacion",
			"mv_estado",
			"mv_usuario_creacion",
			"mv_fecha_creacion",
			"mv_pr_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"mv_id",
			"mv_per_id",
			"mv_datos",
			"mv_nro_memo",
			"mv_validacion",
			"mv_fecha_validacion",
			"mv_estado",
			"mv_usuario_creacion",
			"mv_fecha_creacion",
			"mv_pr_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"mv_id",
			"mv_per_id",
			"mv_datos",
			"mv_nro_memo",
			"mv_validacion",
			"mv_fecha_validacion",
			"mv_estado",
			"mv_usuario_creacion",
			"mv_fecha_creacion",
			"mv_pr_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"mv_id",
			"mv_per_id",
			"mv_datos",
			"mv_nro_memo",
			"mv_validacion",
			"mv_fecha_validacion",
			"mv_estado",
			"mv_usuario_creacion",
			"mv_fecha_creacion",
			"mv_pr_id" 
		];
	}
}
