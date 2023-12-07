<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpTipoAbono extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_tipo_abono';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'cb_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'cb_id','cb_cod_banco','cb_per_id','cb_num_cuenta','cb_tipo_abono','cb_fecha_mod','cb_estado','cb_secuencial','cb_fecha_formulario'
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
				CAST(cb_id AS TEXT) LIKE ?  OR 
				cb_num_cuenta LIKE ?  OR 
				cb_tipo_abono LIKE ?  OR 
				cb_estado LIKE ? 
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
			"cb_id",
			"cb_cod_banco",
			"cb_per_id",
			"cb_num_cuenta",
			"cb_tipo_abono",
			"cb_fecha_mod",
			"cb_estado",
			"cb_secuencial",
			"cb_fecha_formulario" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"cb_id",
			"cb_cod_banco",
			"cb_per_id",
			"cb_num_cuenta",
			"cb_tipo_abono",
			"cb_fecha_mod",
			"cb_estado",
			"cb_secuencial",
			"cb_fecha_formulario" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"cb_id",
			"cb_cod_banco",
			"cb_per_id",
			"cb_num_cuenta",
			"cb_tipo_abono",
			"cb_fecha_mod",
			"cb_estado",
			"cb_secuencial",
			"cb_fecha_formulario" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"cb_id",
			"cb_cod_banco",
			"cb_per_id",
			"cb_num_cuenta",
			"cb_tipo_abono",
			"cb_fecha_mod",
			"cb_estado",
			"cb_secuencial",
			"cb_fecha_formulario" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"cb_id",
			"cb_cod_banco",
			"cb_per_id",
			"cb_num_cuenta",
			"cb_tipo_abono",
			"cb_fecha_mod",
			"cb_estado",
			"cb_secuencial",
			"cb_fecha_formulario" 
		];
	}
}
