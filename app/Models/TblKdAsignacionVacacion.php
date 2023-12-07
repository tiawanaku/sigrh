<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblKdAsignacionVacacion extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_kd_asignacion_vacacion';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'va_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'va_id','va_per_id','va_gestion_inicio','va_gestion_fin','va_dias_ley','va_dias_restantes','va_horas_restantes','va_fecha_ingreso_r','va_anio','va_estado','va_usuario_creacion','va_fecha_creacion'
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
				CAST(va_id AS TEXT) LIKE ?  OR 
				va_estado LIKE ? 
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
			"va_id",
			"va_per_id",
			"va_gestion_inicio",
			"va_gestion_fin",
			"va_dias_ley",
			"va_dias_restantes",
			"va_horas_restantes",
			"va_fecha_ingreso_r",
			"va_anio",
			"va_estado",
			"va_usuario_creacion",
			"va_fecha_creacion" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"va_id",
			"va_per_id",
			"va_gestion_inicio",
			"va_gestion_fin",
			"va_dias_ley",
			"va_dias_restantes",
			"va_horas_restantes",
			"va_fecha_ingreso_r",
			"va_anio",
			"va_estado",
			"va_usuario_creacion",
			"va_fecha_creacion" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"va_id",
			"va_per_id",
			"va_gestion_inicio",
			"va_gestion_fin",
			"va_dias_ley",
			"va_dias_restantes",
			"va_horas_restantes",
			"va_fecha_ingreso_r",
			"va_anio",
			"va_estado",
			"va_usuario_creacion",
			"va_fecha_creacion" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"va_id",
			"va_per_id",
			"va_gestion_inicio",
			"va_gestion_fin",
			"va_dias_ley",
			"va_dias_restantes",
			"va_horas_restantes",
			"va_fecha_ingreso_r",
			"va_anio",
			"va_estado",
			"va_usuario_creacion",
			"va_fecha_creacion" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"va_id",
			"va_per_id",
			"va_gestion_inicio",
			"va_gestion_fin",
			"va_dias_ley",
			"va_dias_restantes",
			"va_horas_restantes",
			"va_fecha_ingreso_r",
			"va_anio",
			"va_estado",
			"va_usuario_creacion",
			"va_fecha_creacion" 
		];
	}
}
