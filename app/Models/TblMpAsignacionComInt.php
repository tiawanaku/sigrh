<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpAsignacionComInt extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_asignacion_com_int';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ci_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ci_per_id','ci_ca_id','ci_fecha_inicio','ci_fecha_fin','ci_estado','ci_tipo_reg','ci_tipo_mov','ci_pr_id','ci_tipo_mov_baja','ci_ca_id_ant','ci_ca_id_n','ci_es_id_n','ci_eo_id_n','ci_per_id_interinato','ci_validacion','ci_fecha_validacion','ci_memo','ci_memo_baja','ci_usuario_creacion','ci_fecha_creacion'
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
				CAST(ci_id AS TEXT) LIKE ?  OR 
				ci_estado LIKE ?  OR 
				ci_tipo_reg LIKE ?  OR 
				ci_tipo_mov LIKE ?  OR 
				ci_tipo_mov_baja LIKE ?  OR 
				ci_validacion LIKE ? 
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
			"ci_id",
			"ci_per_id",
			"ci_ca_id",
			"ci_fecha_inicio",
			"ci_fecha_fin",
			"ci_estado",
			"ci_tipo_reg",
			"ci_tipo_mov",
			"ci_pr_id",
			"ci_tipo_mov_baja",
			"ci_ca_id_ant",
			"ci_ca_id_n",
			"ci_es_id_n",
			"ci_eo_id_n",
			"ci_per_id_interinato",
			"ci_validacion",
			"ci_fecha_validacion",
			"ci_memo",
			"ci_memo_baja",
			"ci_usuario_creacion",
			"ci_fecha_creacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ci_id",
			"ci_per_id",
			"ci_ca_id",
			"ci_fecha_inicio",
			"ci_fecha_fin",
			"ci_estado",
			"ci_tipo_reg",
			"ci_tipo_mov",
			"ci_pr_id",
			"ci_tipo_mov_baja",
			"ci_ca_id_ant",
			"ci_ca_id_n",
			"ci_es_id_n",
			"ci_eo_id_n",
			"ci_per_id_interinato",
			"ci_validacion",
			"ci_fecha_validacion",
			"ci_memo",
			"ci_memo_baja",
			"ci_usuario_creacion",
			"ci_fecha_creacion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ci_id",
			"ci_per_id",
			"ci_ca_id",
			"ci_fecha_inicio",
			"ci_fecha_fin",
			"ci_estado",
			"ci_tipo_reg",
			"ci_tipo_mov",
			"ci_pr_id",
			"ci_tipo_mov_baja",
			"ci_ca_id_ant",
			"ci_ca_id_n",
			"ci_es_id_n",
			"ci_eo_id_n",
			"ci_per_id_interinato",
			"ci_validacion",
			"ci_fecha_validacion",
			"ci_memo",
			"ci_memo_baja",
			"ci_usuario_creacion",
			"ci_fecha_creacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ci_id",
			"ci_per_id",
			"ci_ca_id",
			"ci_fecha_inicio",
			"ci_fecha_fin",
			"ci_estado",
			"ci_tipo_reg",
			"ci_tipo_mov",
			"ci_pr_id",
			"ci_tipo_mov_baja",
			"ci_ca_id_ant",
			"ci_ca_id_n",
			"ci_es_id_n",
			"ci_eo_id_n",
			"ci_per_id_interinato",
			"ci_validacion",
			"ci_fecha_validacion",
			"ci_memo",
			"ci_memo_baja",
			"ci_usuario_creacion",
			"ci_fecha_creacion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ci_id",
			"ci_per_id",
			"ci_ca_id",
			"ci_fecha_inicio",
			"ci_fecha_fin",
			"ci_estado",
			"ci_tipo_reg",
			"ci_tipo_mov",
			"ci_pr_id",
			"ci_tipo_mov_baja",
			"ci_ca_id_ant",
			"ci_ca_id_n",
			"ci_es_id_n",
			"ci_eo_id_n",
			"ci_per_id_interinato",
			"ci_validacion",
			"ci_fecha_validacion",
			"ci_memo",
			"ci_memo_baja",
			"ci_usuario_creacion",
			"ci_fecha_creacion" 
		];
	}
}
