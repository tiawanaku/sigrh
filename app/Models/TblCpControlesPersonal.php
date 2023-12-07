<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpControlesPersonal extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_controles_personal';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'cp_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'cp_id','cp_per_id','cp_edificio','cp_fecha_inicio','cp_fecha_final','cp_estado'
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
				CAST(cp_id AS TEXT) LIKE ?  OR 
				cp_estado LIKE ? 
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
			"cp_id",
			"cp_per_id",
			"cp_edificio",
			"cp_fecha_inicio",
			"cp_fecha_final",
			"cp_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"cp_id",
			"cp_per_id",
			"cp_edificio",
			"cp_fecha_inicio",
			"cp_fecha_final",
			"cp_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"cp_id",
			"cp_per_id",
			"cp_edificio",
			"cp_fecha_inicio",
			"cp_fecha_final",
			"cp_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"cp_id",
			"cp_per_id",
			"cp_edificio",
			"cp_fecha_inicio",
			"cp_fecha_final",
			"cp_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"cp_id",
			"cp_per_id",
			"cp_edificio",
			"cp_fecha_inicio",
			"cp_fecha_final",
			"cp_estado" 
		];
	}
}
