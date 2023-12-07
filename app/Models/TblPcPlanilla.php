<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPcPlanilla extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pc_planilla';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'pl_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pl_estado','pl_pr_id','pl_ue','pl_correlativo'
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
				pl_estado LIKE ? 
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
			"pl_id",
			"pl_estado",
			"pl_pr_id",
			"pl_ue",
			"pl_correlativo" 
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
			"pl_estado",
			"pl_pr_id",
			"pl_ue",
			"pl_correlativo" 
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
			"pl_estado",
			"pl_pr_id",
			"pl_ue",
			"pl_correlativo" 
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
			"pl_estado",
			"pl_pr_id",
			"pl_ue",
			"pl_correlativo" 
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
			"pl_estado",
			"pl_pr_id",
			"pl_ue",
			"pl_correlativo" 
		];
	}
}
