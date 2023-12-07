<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblCpDispositivo extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_cp_dispositivo';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'di_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'di_id','di_descripcion','di_ip','di_edificio','di_estado'
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
				CAST(di_id AS TEXT) LIKE ?  OR 
				di_descripcion LIKE ?  OR 
				di_ip LIKE ?  OR 
				di_estado LIKE ? 
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
			"di_id",
			"di_descripcion",
			"di_ip",
			"di_edificio",
			"di_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"di_id",
			"di_descripcion",
			"di_ip",
			"di_edificio",
			"di_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"di_id",
			"di_descripcion",
			"di_ip",
			"di_edificio",
			"di_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"di_id",
			"di_descripcion",
			"di_ip",
			"di_edificio",
			"di_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"di_id",
			"di_descripcion",
			"di_ip",
			"di_edificio",
			"di_estado" 
		];
	}
}
