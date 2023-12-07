<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblKdEducacionFormal extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_kd_educacion_formal';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ef_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ef_per_id','ef_nivel_instruccion','ef_centro_form','ef_carrera_especialidad','ef_fecha_ini','ef_fecha_fin','ef_anios_estudio','ef_titulo_obtenido','ef_fecha_titulo_obtenido','ef_nro_titulo','ef_estado'
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
				CAST(ef_id AS TEXT) LIKE ?  OR 
				ef_centro_form LIKE ?  OR 
				ef_nro_titulo LIKE ?  OR 
				ef_estado LIKE ? 
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
			"ef_id",
			"ef_per_id",
			"ef_nivel_instruccion",
			"ef_centro_form",
			"ef_carrera_especialidad",
			"ef_fecha_ini",
			"ef_fecha_fin",
			"ef_anios_estudio",
			"ef_titulo_obtenido",
			"ef_fecha_titulo_obtenido",
			"ef_nro_titulo",
			"ef_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ef_id",
			"ef_per_id",
			"ef_nivel_instruccion",
			"ef_centro_form",
			"ef_carrera_especialidad",
			"ef_fecha_ini",
			"ef_fecha_fin",
			"ef_anios_estudio",
			"ef_titulo_obtenido",
			"ef_fecha_titulo_obtenido",
			"ef_nro_titulo",
			"ef_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ef_id",
			"ef_per_id",
			"ef_nivel_instruccion",
			"ef_centro_form",
			"ef_carrera_especialidad",
			"ef_fecha_ini",
			"ef_fecha_fin",
			"ef_anios_estudio",
			"ef_titulo_obtenido",
			"ef_fecha_titulo_obtenido",
			"ef_nro_titulo",
			"ef_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ef_id",
			"ef_per_id",
			"ef_nivel_instruccion",
			"ef_centro_form",
			"ef_carrera_especialidad",
			"ef_fecha_ini",
			"ef_fecha_fin",
			"ef_anios_estudio",
			"ef_titulo_obtenido",
			"ef_fecha_titulo_obtenido",
			"ef_nro_titulo",
			"ef_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ef_id",
			"ef_per_id",
			"ef_nivel_instruccion",
			"ef_centro_form",
			"ef_carrera_especialidad",
			"ef_fecha_ini",
			"ef_fecha_fin",
			"ef_anios_estudio",
			"ef_titulo_obtenido",
			"ef_fecha_titulo_obtenido",
			"ef_nro_titulo",
			"ef_estado" 
		];
	}
}
