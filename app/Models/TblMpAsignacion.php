<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpAsignacion extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_asignacion';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'as_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'as_per_id','as_ca_id','as_fecha_inicio','as_fecha_fin','as_estado','as_tipo_reg','as_tipo_mov','as_tipo_baja','as_validacion','as_fecha_validacion','as_memo','as_memo_baja','as_usuario_creacion','as_fecha_creacion','as_pr_id'
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
				CAST(as_id AS TEXT) LIKE ?  OR 
				as_estado LIKE ?  OR 
				as_tipo_reg LIKE ?  OR 
				as_tipo_mov LIKE ?  OR 
				as_tipo_baja LIKE ?  OR 
				as_validacion LIKE ? 
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
			"as_id",
			"as_per_id",
			"as_ca_id",
			"as_fecha_inicio",
			"as_fecha_fin",
			"as_estado",
			"as_tipo_reg",
			"as_tipo_mov",
			"as_tipo_baja",
			"as_validacion",
			"as_fecha_validacion",
			"as_memo",
			"as_memo_baja",
			"as_usuario_creacion",
			"as_fecha_creacion",
			"as_pr_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"as_id",
			"as_per_id",
			"as_ca_id",
			"as_fecha_inicio",
			"as_fecha_fin",
			"as_estado",
			"as_tipo_reg",
			"as_tipo_mov",
			"as_tipo_baja",
			"as_validacion",
			"as_fecha_validacion",
			"as_memo",
			"as_memo_baja",
			"as_usuario_creacion",
			"as_fecha_creacion",
			"as_pr_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"as_id",
			"as_per_id",
			"as_ca_id",
			"as_fecha_inicio",
			"as_fecha_fin",
			"as_estado",
			"as_tipo_reg",
			"as_tipo_mov",
			"as_tipo_baja",
			"as_validacion",
			"as_fecha_validacion",
			"as_memo",
			"as_memo_baja",
			"as_usuario_creacion",
			"as_fecha_creacion",
			"as_pr_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"as_id",
			"as_per_id",
			"as_ca_id",
			"as_fecha_inicio",
			"as_fecha_fin",
			"as_estado",
			"as_tipo_reg",
			"as_tipo_mov",
			"as_tipo_baja",
			"as_validacion",
			"as_fecha_validacion",
			"as_memo",
			"as_memo_baja",
			"as_usuario_creacion",
			"as_fecha_creacion",
			"as_pr_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"as_id",
			"as_per_id",
			"as_ca_id",
			"as_fecha_inicio",
			"as_fecha_fin",
			"as_estado",
			"as_tipo_reg",
			"as_tipo_mov",
			"as_tipo_baja",
			"as_validacion",
			"as_fecha_validacion",
			"as_memo",
			"as_memo_baja",
			"as_usuario_creacion",
			"as_fecha_creacion",
			"as_pr_id" 
		];
	}
}
