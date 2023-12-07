<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpEcategProgItem extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_ecateg_prog_item';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'eoi_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'eoi_eo_id','eoi_ti_item','eoi_estado'
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
				CAST(eoi_id AS TEXT) LIKE ?  OR 
				eoi_ti_item LIKE ?  OR 
				eoi_estado LIKE ? 
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
			"eoi_id",
			"eoi_eo_id",
			"eoi_ti_item",
			"eoi_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"eoi_id",
			"eoi_eo_id",
			"eoi_ti_item",
			"eoi_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"eoi_id",
			"eoi_eo_id",
			"eoi_ti_item",
			"eoi_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"eoi_id",
			"eoi_eo_id",
			"eoi_ti_item",
			"eoi_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"eoi_id",
			"eoi_eo_id",
			"eoi_ti_item",
			"eoi_estado" 
		];
	}
}
