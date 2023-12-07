<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpPlanillaLicencias extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_planilla_licencias';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'pl_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pl_id','pl_observaciones','pl_estado','pl_per_id'
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
				CAST(pl_id AS TEXT) LIKE ?  OR 
				pl_observaciones LIKE ?  OR 
				pl_estado LIKE ? 
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
			"pl_id",
			"pl_observaciones",
			"pl_estado",
			"pl_per_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"pl_id",
			"pl_observaciones",
			"pl_estado",
			"pl_per_id" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"pl_id",
			"pl_observaciones",
			"pl_estado",
			"pl_per_id" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"pl_id",
			"pl_observaciones",
			"pl_estado",
			"pl_per_id" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"pl_id",
			"pl_observaciones",
			"pl_estado",
			"pl_per_id" 
		];
	}
}
