<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaTransaccionesCuotas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_transacciones_cuotas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'tc_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'tc_tr_id','tc_cant_cuotas','tc_monto','tc_montobs','tc_estado','tc_fechapago','tc_fechareprogamado','tc_tipopago','tc_obs','tc_fechadeposito','tc_nrofactura','tc_usuario','tc_fecharegistro','tc_tipohaberdebe','tc_tiposervicio'
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
				CAST(tc_id AS TEXT) LIKE ?  OR 
				tc_estado LIKE ?  OR 
				tc_obs LIKE ?  OR 
				tc_nrofactura LIKE ?  OR 
				tc_tipohaberdebe LIKE ?  OR 
				tc_tiposervicio LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"tc_id",
			"tc_tr_id",
			"tc_cant_cuotas",
			"tc_monto",
			"tc_montobs",
			"tc_estado",
			"tc_fechapago",
			"tc_fechareprogamado",
			"tc_tipopago",
			"tc_obs",
			"tc_fechadeposito",
			"tc_nrofactura",
			"tc_usuario",
			"tc_fecharegistro",
			"tc_tipohaberdebe",
			"tc_tiposervicio" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"tc_id",
			"tc_tr_id",
			"tc_cant_cuotas",
			"tc_monto",
			"tc_montobs",
			"tc_estado",
			"tc_fechapago",
			"tc_fechareprogamado",
			"tc_tipopago",
			"tc_obs",
			"tc_fechadeposito",
			"tc_nrofactura",
			"tc_usuario",
			"tc_fecharegistro",
			"tc_tipohaberdebe",
			"tc_tiposervicio" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"tc_id",
			"tc_tr_id",
			"tc_cant_cuotas",
			"tc_monto",
			"tc_montobs",
			"tc_estado",
			"tc_fechapago",
			"tc_fechareprogamado",
			"tc_tipopago",
			"tc_obs",
			"tc_fechadeposito",
			"tc_nrofactura",
			"tc_usuario",
			"tc_fecharegistro",
			"tc_tipohaberdebe",
			"tc_tiposervicio" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"tc_id",
			"tc_tr_id",
			"tc_cant_cuotas",
			"tc_monto",
			"tc_montobs",
			"tc_estado",
			"tc_fechapago",
			"tc_fechareprogamado",
			"tc_tipopago",
			"tc_obs",
			"tc_fechadeposito",
			"tc_nrofactura",
			"tc_usuario",
			"tc_fecharegistro",
			"tc_tipohaberdebe",
			"tc_tiposervicio" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"tc_id",
			"tc_tr_id",
			"tc_cant_cuotas",
			"tc_monto",
			"tc_montobs",
			"tc_estado",
			"tc_fechapago",
			"tc_fechareprogamado",
			"tc_tipopago",
			"tc_obs",
			"tc_fechadeposito",
			"tc_nrofactura",
			"tc_usuario",
			"tc_fecharegistro",
			"tc_tipohaberdebe",
			"tc_tiposervicio" 
		];
	}
}
