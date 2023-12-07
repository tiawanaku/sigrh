<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpCierreMensual extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_cierre_mensual';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'cm_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'cm_id','cm_fecha_inicio','cm_fecha_final','cm_estado'
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
				CAST(cm_id AS TEXT) LIKE ?  OR 
				cm_estado LIKE ? 
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
			"cm_id",
			"cm_fecha_inicio",
			"cm_fecha_final",
			"cm_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"cm_id",
			"cm_fecha_inicio",
			"cm_fecha_final",
			"cm_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"cm_id",
			"cm_fecha_inicio",
			"cm_fecha_final",
			"cm_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"cm_id",
			"cm_fecha_inicio",
			"cm_fecha_final",
			"cm_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"cm_id",
			"cm_fecha_inicio",
			"cm_fecha_final",
			"cm_estado" 
		];
	}
}
