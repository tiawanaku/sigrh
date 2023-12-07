<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblKdVacacionPrescrito extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_kd_vacacion_prescrito';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'vpre_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'vpre_va_id','vpre_fecha_registro_prescrito','vpre_nro_documento','vpre_autorizado_por','vpre_fecha_habilitacion_prescrito','vpre_fecha_validez_prescrito','vpre_estado','vpre_usuario_creacion','vpre_fecha_creacion'
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
				CAST(vpre_id AS TEXT) LIKE ?  OR 
				vpre_nro_documento LIKE ?  OR 
				vpre_autorizado_por LIKE ?  OR 
				vpre_estado LIKE ? 
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
			"vpre_id",
			"vpre_va_id",
			"vpre_fecha_registro_prescrito",
			"vpre_nro_documento",
			"vpre_autorizado_por",
			"vpre_fecha_habilitacion_prescrito",
			"vpre_fecha_validez_prescrito",
			"vpre_estado",
			"vpre_usuario_creacion",
			"vpre_fecha_creacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"vpre_id",
			"vpre_va_id",
			"vpre_fecha_registro_prescrito",
			"vpre_nro_documento",
			"vpre_autorizado_por",
			"vpre_fecha_habilitacion_prescrito",
			"vpre_fecha_validez_prescrito",
			"vpre_estado",
			"vpre_usuario_creacion",
			"vpre_fecha_creacion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"vpre_id",
			"vpre_va_id",
			"vpre_fecha_registro_prescrito",
			"vpre_nro_documento",
			"vpre_autorizado_por",
			"vpre_fecha_habilitacion_prescrito",
			"vpre_fecha_validez_prescrito",
			"vpre_estado",
			"vpre_usuario_creacion",
			"vpre_fecha_creacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"vpre_id",
			"vpre_va_id",
			"vpre_fecha_registro_prescrito",
			"vpre_nro_documento",
			"vpre_autorizado_por",
			"vpre_fecha_habilitacion_prescrito",
			"vpre_fecha_validez_prescrito",
			"vpre_estado",
			"vpre_usuario_creacion",
			"vpre_fecha_creacion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"vpre_id",
			"vpre_va_id",
			"vpre_fecha_registro_prescrito",
			"vpre_nro_documento",
			"vpre_autorizado_por",
			"vpre_fecha_habilitacion_prescrito",
			"vpre_fecha_validez_prescrito",
			"vpre_estado",
			"vpre_usuario_creacion",
			"vpre_fecha_creacion" 
		];
	}
}
