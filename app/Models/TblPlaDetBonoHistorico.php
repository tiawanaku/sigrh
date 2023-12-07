<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaDetBonoHistorico extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_det_bono_historico';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'dboh_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'dboh_id','dboh_dbh_id','dboh_cs_id','dboh_factorhaberbasico','dboh_fechacas','dboh_observacion','dboh_tiporegistro','dboh_diasbono','dboh_porcentajeanterior','dboh_porcentajevigente','dboh_adecuacion','dboh_montobono','dboh_factorreintegrobono','dboh_estado'
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
				CAST(dboh_id AS TEXT) LIKE ?  OR 
				dboh_observacion LIKE ?  OR 
				dboh_tiporegistro LIKE ?  OR 
				dboh_adecuacion LIKE ?  OR 
				dboh_estado LIKE ? 
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
			"dboh_id",
			"dboh_dbh_id",
			"dboh_cs_id",
			"dboh_factorhaberbasico",
			"dboh_fechacas",
			"dboh_observacion",
			"dboh_tiporegistro",
			"dboh_diasbono",
			"dboh_porcentajeanterior",
			"dboh_porcentajevigente",
			"dboh_adecuacion",
			"dboh_montobono",
			"dboh_factorreintegrobono",
			"dboh_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"dboh_id",
			"dboh_dbh_id",
			"dboh_cs_id",
			"dboh_factorhaberbasico",
			"dboh_fechacas",
			"dboh_observacion",
			"dboh_tiporegistro",
			"dboh_diasbono",
			"dboh_porcentajeanterior",
			"dboh_porcentajevigente",
			"dboh_adecuacion",
			"dboh_montobono",
			"dboh_factorreintegrobono",
			"dboh_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"dboh_id",
			"dboh_dbh_id",
			"dboh_cs_id",
			"dboh_factorhaberbasico",
			"dboh_fechacas",
			"dboh_observacion",
			"dboh_tiporegistro",
			"dboh_diasbono",
			"dboh_porcentajeanterior",
			"dboh_porcentajevigente",
			"dboh_adecuacion",
			"dboh_montobono",
			"dboh_factorreintegrobono",
			"dboh_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"dboh_id",
			"dboh_dbh_id",
			"dboh_cs_id",
			"dboh_factorhaberbasico",
			"dboh_fechacas",
			"dboh_observacion",
			"dboh_tiporegistro",
			"dboh_diasbono",
			"dboh_porcentajeanterior",
			"dboh_porcentajevigente",
			"dboh_adecuacion",
			"dboh_montobono",
			"dboh_factorreintegrobono",
			"dboh_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"dboh_id",
			"dboh_dbh_id",
			"dboh_cs_id",
			"dboh_factorhaberbasico",
			"dboh_fechacas",
			"dboh_observacion",
			"dboh_tiporegistro",
			"dboh_diasbono",
			"dboh_porcentajeanterior",
			"dboh_porcentajevigente",
			"dboh_adecuacion",
			"dboh_montobono",
			"dboh_factorreintegrobono",
			"dboh_estado" 
		];
	}
}
