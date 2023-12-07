<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblRfsPoai extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_rfs_poai';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'poai_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'poai_rs_id','poai_per_id','poai_objetivo','poai_formaci_n_profesional','poai_estado'
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
				CAST(poai_id AS TEXT) LIKE ?  OR 
				poai_objetivo LIKE ?  OR 
				poai_formación_profesional LIKE ?  OR 
				poai_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"poai_id",
			"poai_rs_id",
			"poai_per_id",
			"poai_objetivo",
			"poai_formación_profesional AS poai_formaci_n_profesional",
			"poai_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"poai_id",
			"poai_rs_id",
			"poai_per_id",
			"poai_objetivo",
			"poai_formación_profesional AS poai_formaci_n_profesional",
			"poai_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"poai_id",
			"poai_rs_id",
			"poai_per_id",
			"poai_objetivo",
			"poai_formación_profesional AS poai_formaci_n_profesional",
			"poai_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"poai_id",
			"poai_rs_id",
			"poai_per_id",
			"poai_objetivo",
			"poai_formación_profesional AS poai_formaci_n_profesional",
			"poai_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"poai_id",
			"poai_rs_id",
			"poai_per_id",
			"poai_objetivo",
			"poai_formación_profesional AS poai_formaci_n_profesional",
			"poai_estado" 
		];
	}
}
