<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaAcreedorRetencion extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_acreedor_retencion';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'acr_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'acr_tipo_entidad','acr_descripcion','acr_documento','acr_estado'
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
				CAST(acr_id AS TEXT) LIKE ?  OR 
				acr_tipo_entidad LIKE ?  OR 
				acr_descripcion LIKE ?  OR 
				acr_documento LIKE ?  OR 
				acr_estado LIKE ? 
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
			"acr_id",
			"acr_tipo_entidad",
			"acr_descripcion",
			"acr_documento",
			"acr_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"acr_id",
			"acr_tipo_entidad",
			"acr_descripcion",
			"acr_documento",
			"acr_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"acr_id",
			"acr_tipo_entidad",
			"acr_descripcion",
			"acr_documento",
			"acr_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"acr_id",
			"acr_tipo_entidad",
			"acr_descripcion",
			"acr_documento",
			"acr_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"acr_id",
			"acr_tipo_entidad",
			"acr_descripcion",
			"acr_documento",
			"acr_estado" 
		];
	}
}
