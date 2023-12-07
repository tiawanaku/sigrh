<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpHuellas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_huellas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'hu_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'hu_id','hu_per_id','hu_nro_huella','hu_huella','hu_privilegio','hu_password','hu_estado'
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
				CAST(hu_id AS TEXT) LIKE ?  OR 
				hu_huella LIKE ?  OR 
				hu_password LIKE ?  OR 
				hu_estado LIKE ? 
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
			"hu_id",
			"hu_per_id",
			"hu_nro_huella",
			"hu_huella",
			"hu_privilegio",
			"hu_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"hu_id",
			"hu_per_id",
			"hu_nro_huella",
			"hu_huella",
			"hu_privilegio",
			"hu_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"hu_id",
			"hu_per_id",
			"hu_nro_huella",
			"hu_huella",
			"hu_privilegio",
			"hu_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"hu_id",
			"hu_per_id",
			"hu_nro_huella",
			"hu_huella",
			"hu_privilegio",
			"hu_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"hu_id",
			"hu_per_id",
			"hu_nro_huella",
			"hu_huella",
			"hu_privilegio",
			"hu_estado" 
		];
	}
}
