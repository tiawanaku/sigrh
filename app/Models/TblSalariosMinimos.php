<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblSalariosMinimos extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_salarios_minimos';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'sm_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'sm_id','sm_importe','sm_operacion','sm_fecha_vigencia','sm_porcentaje_incremento','sm_estado'
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
				CAST(sm_id AS TEXT) LIKE ?  OR 
				sm_operacion LIKE ?  OR 
				sm_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
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
			"sm_id",
			"sm_importe",
			"sm_operacion",
			"sm_fecha_vigencia",
			"sm_porcentaje_incremento",
			"sm_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"sm_id",
			"sm_importe",
			"sm_operacion",
			"sm_fecha_vigencia",
			"sm_porcentaje_incremento",
			"sm_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"sm_id",
			"sm_importe",
			"sm_operacion",
			"sm_fecha_vigencia",
			"sm_porcentaje_incremento",
			"sm_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"sm_id",
			"sm_importe",
			"sm_operacion",
			"sm_fecha_vigencia",
			"sm_porcentaje_incremento",
			"sm_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"sm_id",
			"sm_importe",
			"sm_operacion",
			"sm_fecha_vigencia",
			"sm_porcentaje_incremento",
			"sm_estado" 
		];
	}
}
