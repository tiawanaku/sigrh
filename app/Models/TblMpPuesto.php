<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpPuesto extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_puesto';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = '';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pu_id','pu_descripcion','pu_requisito_adic','pu_posibilidad_djbr','pu_pr_id','pu_estado'
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
				CAST(pu_id AS TEXT) LIKE ?  OR 
				pu_descripcion LIKE ?  OR 
				pu_requisito_adic LIKE ?  OR 
				pu_posibilidad_djbr LIKE ?  OR 
				pu_estado LIKE ? 
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
			"pu_id",
			"pu_descripcion",
			"pu_requisito_adic",
			"pu_posibilidad_djbr",
			"pu_pr_id",
			"pu_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"pu_id",
			"pu_descripcion",
			"pu_requisito_adic",
			"pu_posibilidad_djbr",
			"pu_pr_id",
			"pu_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
		];
	}
}
