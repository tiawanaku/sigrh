<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpNivelEscala extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_nivel_escala';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ne_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ne_id','ne_descripcion','ne_sub_descripcion','ne_secuencial','ne_estado','ne_pr_id','ne_categoria','ne_nivel_interno'
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
				CAST(ne_id AS TEXT) LIKE ?  OR 
				ne_descripcion LIKE ?  OR 
				ne_sub_descripcion LIKE ?  OR 
				ne_estado LIKE ?  OR 
				ne_categoria LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"ne_id",
			"ne_descripcion",
			"ne_sub_descripcion",
			"ne_secuencial",
			"ne_estado",
			"ne_pr_id",
			"ne_categoria",
			"ne_nivel_interno" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ne_id",
			"ne_descripcion",
			"ne_sub_descripcion",
			"ne_secuencial",
			"ne_estado",
			"ne_pr_id",
			"ne_categoria",
			"ne_nivel_interno" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ne_id",
			"ne_descripcion",
			"ne_sub_descripcion",
			"ne_secuencial",
			"ne_estado",
			"ne_pr_id",
			"ne_categoria",
			"ne_nivel_interno" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ne_id",
			"ne_descripcion",
			"ne_sub_descripcion",
			"ne_secuencial",
			"ne_estado",
			"ne_pr_id",
			"ne_categoria",
			"ne_nivel_interno" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ne_id",
			"ne_descripcion",
			"ne_sub_descripcion",
			"ne_secuencial",
			"ne_estado",
			"ne_pr_id",
			"ne_categoria",
			"ne_nivel_interno" 
		];
	}
}
