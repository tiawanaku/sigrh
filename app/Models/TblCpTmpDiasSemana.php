<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpTmpDiasSemana extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_tmp_dias_semana';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = '';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'tds_per_id','tds_lunes','tds_martes','tds_miercoles','tds_jueves','tds_viernes','tds_sabado','tds_domingo','tds_semana','tds_fecha_inicial','tds_fecha_final'
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
				CAST(tds_per_id AS TEXT) LIKE ? 
		)';
		$search_params = [
			"%$text%"
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
			"tds_per_id",
			"tds_lunes",
			"tds_martes",
			"tds_miercoles",
			"tds_jueves",
			"tds_viernes",
			"tds_sabado",
			"tds_domingo",
			"tds_semana",
			"tds_fecha_inicial",
			"tds_fecha_final" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"tds_per_id",
			"tds_lunes",
			"tds_martes",
			"tds_miercoles",
			"tds_jueves",
			"tds_viernes",
			"tds_sabado",
			"tds_domingo",
			"tds_semana",
			"tds_fecha_inicial",
			"tds_fecha_final" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
		];
	}
}
