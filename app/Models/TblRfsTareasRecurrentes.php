<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblRfsTareasRecurrentes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_rfs_tareas_recurrentes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'tr_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'tr_poai_id','tr_descripcion','tr_estado'
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
				CAST(tr_id AS TEXT) LIKE ?  OR 
				tr_descripcion LIKE ?  OR 
				tr_estado LIKE ? 
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
			"tr_id",
			"tr_poai_id",
			"tr_descripcion",
			"tr_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"tr_id",
			"tr_poai_id",
			"tr_descripcion",
			"tr_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"tr_id",
			"tr_poai_id",
			"tr_descripcion",
			"tr_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"tr_id",
			"tr_poai_id",
			"tr_descripcion",
			"tr_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"tr_id",
			"tr_poai_id",
			"tr_descripcion",
			"tr_estado" 
		];
	}
}
