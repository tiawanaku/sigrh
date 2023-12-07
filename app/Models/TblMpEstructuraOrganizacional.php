<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpEstructuraOrganizacional extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_estructura_organizacional';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'eo_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'eo_id','eo_pr_id','eo_cp_id','eo_prog','eo_sprog','eo_proy','eo_obract','eo_unidad','eo_descripcion','eo_estado','eo_cod_superior'
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
				CAST(eo_id AS TEXT) LIKE ?  OR 
				eo_descripcion LIKE ?  OR 
				eo_estado LIKE ? 
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
			"eo_id",
			"eo_pr_id",
			"eo_cp_id",
			"eo_prog",
			"eo_sprog",
			"eo_proy",
			"eo_obract",
			"eo_unidad",
			"eo_descripcion",
			"eo_estado",
			"eo_cod_superior" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"eo_id",
			"eo_pr_id",
			"eo_cp_id",
			"eo_prog",
			"eo_sprog",
			"eo_proy",
			"eo_obract",
			"eo_unidad",
			"eo_descripcion",
			"eo_estado",
			"eo_cod_superior" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"eo_id",
			"eo_pr_id",
			"eo_cp_id",
			"eo_prog",
			"eo_sprog",
			"eo_proy",
			"eo_obract",
			"eo_unidad",
			"eo_descripcion",
			"eo_estado",
			"eo_cod_superior" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"eo_id",
			"eo_pr_id",
			"eo_cp_id",
			"eo_prog",
			"eo_sprog",
			"eo_proy",
			"eo_obract",
			"eo_unidad",
			"eo_descripcion",
			"eo_estado",
			"eo_cod_superior" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"eo_id",
			"eo_pr_id",
			"eo_cp_id",
			"eo_prog",
			"eo_sprog",
			"eo_proy",
			"eo_obract",
			"eo_unidad",
			"eo_descripcion",
			"eo_estado",
			"eo_cod_superior" 
		];
	}
}
