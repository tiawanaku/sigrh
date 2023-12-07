<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpTipoItem extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_tipo_item';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ti_item';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ti_item','ti_descripcion','ti_estado','ti_tipo','ti_item_suplencia','ti_orden','ti_tipo_pago','ti_control','ti_tipo_item_gral'
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
				ti_item LIKE ?  OR 
				ti_descripcion LIKE ?  OR 
				ti_estado LIKE ?  OR 
				ti_tipo LIKE ?  OR 
				ti_item_suplencia LIKE ?  OR 
				ti_tipo_pago LIKE ?  OR 
				ti_tipo_item_gral LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"ti_item",
			"ti_descripcion",
			"ti_estado",
			"ti_tipo",
			"ti_item_suplencia",
			"ti_orden",
			"ti_tipo_pago",
			"ti_control",
			"ti_tipo_item_gral" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ti_item",
			"ti_descripcion",
			"ti_estado",
			"ti_tipo",
			"ti_item_suplencia",
			"ti_orden",
			"ti_tipo_pago",
			"ti_control",
			"ti_tipo_item_gral" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ti_item",
			"ti_descripcion",
			"ti_estado",
			"ti_tipo",
			"ti_item_suplencia",
			"ti_orden",
			"ti_tipo_pago",
			"ti_control",
			"ti_tipo_item_gral" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ti_item",
			"ti_descripcion",
			"ti_estado",
			"ti_tipo",
			"ti_item_suplencia",
			"ti_orden",
			"ti_tipo_pago",
			"ti_control",
			"ti_tipo_item_gral" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ti_item",
			"ti_descripcion",
			"ti_estado",
			"ti_tipo",
			"ti_item_suplencia",
			"ti_orden",
			"ti_tipo_pago",
			"ti_control",
			"ti_tipo_item_gral" 
		];
	}
}
