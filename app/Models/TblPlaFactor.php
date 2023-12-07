<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaFactor extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_factor';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'fa_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'fa_id','fa_descripcion','fa_signo','fa_ac_id','fa_tipo_calculo','fa_valor','fa_tipo','fa_orden','fa_estado'
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
				CAST(fa_id AS TEXT) LIKE ?  OR 
				fa_descripcion LIKE ?  OR 
				fa_signo LIKE ?  OR 
				fa_tipo_calculo LIKE ?  OR 
				fa_tipo LIKE ?  OR 
				fa_estado LIKE ? 
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
			"fa_id",
			"fa_descripcion",
			"fa_signo",
			"fa_ac_id",
			"fa_tipo_calculo",
			"fa_valor",
			"fa_tipo",
			"fa_orden",
			"fa_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"fa_id",
			"fa_descripcion",
			"fa_signo",
			"fa_ac_id",
			"fa_tipo_calculo",
			"fa_valor",
			"fa_tipo",
			"fa_orden",
			"fa_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"fa_id",
			"fa_descripcion",
			"fa_signo",
			"fa_ac_id",
			"fa_tipo_calculo",
			"fa_valor",
			"fa_tipo",
			"fa_orden",
			"fa_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"fa_id",
			"fa_descripcion",
			"fa_signo",
			"fa_ac_id",
			"fa_tipo_calculo",
			"fa_valor",
			"fa_tipo",
			"fa_orden",
			"fa_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"fa_id",
			"fa_descripcion",
			"fa_signo",
			"fa_ac_id",
			"fa_tipo_calculo",
			"fa_valor",
			"fa_tipo",
			"fa_orden",
			"fa_estado" 
		];
	}
}
