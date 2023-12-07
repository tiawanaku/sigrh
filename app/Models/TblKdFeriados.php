<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblKdFeriados extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_kd_feriados';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'fe_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'fe_fecha','fe_descripcion','fe_estado'
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
				CAST(fe_id AS TEXT) LIKE ?  OR 
				fe_descripcion LIKE ?  OR 
				fe_estado LIKE ? 
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
			"fe_id",
			"fe_fecha",
			"fe_descripcion",
			"fe_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"fe_id",
			"fe_fecha",
			"fe_descripcion",
			"fe_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"fe_id",
			"fe_fecha",
			"fe_descripcion",
			"fe_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"fe_id",
			"fe_fecha",
			"fe_descripcion",
			"fe_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"fe_id",
			"fe_fecha",
			"fe_descripcion",
			"fe_estado" 
		];
	}
}
