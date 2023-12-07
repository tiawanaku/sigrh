<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpLimiteHorasExtras extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_limite_horas_extras';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'lhx_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'lhx_es_id','lhx_cat_id','lhx_fecha_asignacion','lhx_estado'
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
				CAST(lhx_id AS TEXT) LIKE ?  OR 
				lhx_estado LIKE ? 
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
			"lhx_id",
			"lhx_es_id",
			"lhx_cat_id",
			"lhx_fecha_asignacion",
			"lhx_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"lhx_id",
			"lhx_es_id",
			"lhx_cat_id",
			"lhx_fecha_asignacion",
			"lhx_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"lhx_id",
			"lhx_es_id",
			"lhx_cat_id",
			"lhx_fecha_asignacion",
			"lhx_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"lhx_id",
			"lhx_es_id",
			"lhx_cat_id",
			"lhx_fecha_asignacion",
			"lhx_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"lhx_id",
			"lhx_es_id",
			"lhx_cat_id",
			"lhx_fecha_asignacion",
			"lhx_estado" 
		];
	}
}
