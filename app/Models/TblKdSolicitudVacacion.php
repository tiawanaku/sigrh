<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblKdSolicitudVacacion extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_kd_solicitud_vacacion';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'vac_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'vac_per_id','vac_a_partir','vac_hasta','vac_va_id','vac_nro_dias_vacacion','vac_observacion','vac_estado','vac_motivo_anulado','vac_fecha_anulado','vac_correlativo','vac_usuario_creacion','vac_fecha_creacion','vac_lj_id'
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
				CAST(vac_id AS TEXT) LIKE ?  OR 
				vac_va_id LIKE ?  OR 
				vac_nro_dias_vacacion LIKE ?  OR 
				vac_observacion LIKE ?  OR 
				vac_estado LIKE ?  OR 
				vac_motivo_anulado LIKE ? 
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
			"vac_id",
			"vac_per_id",
			"vac_a_partir",
			"vac_hasta",
			"vac_va_id",
			"vac_nro_dias_vacacion",
			"vac_observacion",
			"vac_estado",
			"vac_motivo_anulado",
			"vac_fecha_anulado",
			"vac_correlativo",
			"vac_usuario_creacion",
			"vac_fecha_creacion",
			"vac_lj_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"vac_id",
			"vac_per_id",
			"vac_a_partir",
			"vac_hasta",
			"vac_va_id",
			"vac_nro_dias_vacacion",
			"vac_observacion",
			"vac_estado",
			"vac_motivo_anulado",
			"vac_fecha_anulado",
			"vac_correlativo",
			"vac_usuario_creacion",
			"vac_fecha_creacion",
			"vac_lj_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"vac_id",
			"vac_per_id",
			"vac_a_partir",
			"vac_hasta",
			"vac_va_id",
			"vac_nro_dias_vacacion",
			"vac_observacion",
			"vac_estado",
			"vac_motivo_anulado",
			"vac_fecha_anulado",
			"vac_correlativo",
			"vac_usuario_creacion",
			"vac_fecha_creacion",
			"vac_lj_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"vac_id",
			"vac_per_id",
			"vac_a_partir",
			"vac_hasta",
			"vac_va_id",
			"vac_nro_dias_vacacion",
			"vac_observacion",
			"vac_estado",
			"vac_motivo_anulado",
			"vac_fecha_anulado",
			"vac_correlativo",
			"vac_usuario_creacion",
			"vac_fecha_creacion",
			"vac_lj_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"vac_id",
			"vac_per_id",
			"vac_a_partir",
			"vac_hasta",
			"vac_va_id",
			"vac_nro_dias_vacacion",
			"vac_observacion",
			"vac_estado",
			"vac_motivo_anulado",
			"vac_fecha_anulado",
			"vac_correlativo",
			"vac_usuario_creacion",
			"vac_fecha_creacion",
			"vac_lj_id" 
		];
	}
}
