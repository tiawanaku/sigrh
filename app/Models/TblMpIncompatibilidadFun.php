<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpIncompatibilidadFun extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_incompatibilidad_fun';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'if_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'if_per_id','if_per_id_pariente','if_parentesco','if_estado'
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
				CAST(if_id AS TEXT) LIKE ?  OR 
				if_estado LIKE ? 
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
			"if_id",
			"if_per_id",
			"if_per_id_pariente",
			"if_parentesco",
			"if_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"if_id",
			"if_per_id",
			"if_per_id_pariente",
			"if_parentesco",
			"if_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"if_id",
			"if_per_id",
			"if_per_id_pariente",
			"if_parentesco",
			"if_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"if_id",
			"if_per_id",
			"if_per_id_pariente",
			"if_parentesco",
			"if_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"if_id",
			"if_per_id",
			"if_per_id_pariente",
			"if_parentesco",
			"if_estado" 
		];
	}
}
