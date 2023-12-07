<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblMpPresupuesto extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_mp_presupuesto';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'pp_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'pp_cp_id','pp_partida','pp_entidad_trans','pp_fecha_calculo','pp_monto','pp_saldo','pp_estado'
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
				CAST(pp_id AS TEXT) LIKE ?  OR 
				pp_estado LIKE ? 
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
			"pp_id",
			"pp_cp_id",
			"pp_partida",
			"pp_entidad_trans",
			"pp_fecha_calculo",
			"pp_monto",
			"pp_saldo",
			"pp_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"pp_id",
			"pp_cp_id",
			"pp_partida",
			"pp_entidad_trans",
			"pp_fecha_calculo",
			"pp_monto",
			"pp_saldo",
			"pp_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"pp_id",
			"pp_cp_id",
			"pp_partida",
			"pp_entidad_trans",
			"pp_fecha_calculo",
			"pp_monto",
			"pp_saldo",
			"pp_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"pp_id",
			"pp_cp_id",
			"pp_partida",
			"pp_entidad_trans",
			"pp_fecha_calculo",
			"pp_monto",
			"pp_saldo",
			"pp_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"pp_id",
			"pp_cp_id",
			"pp_partida",
			"pp_entidad_trans",
			"pp_fecha_calculo",
			"pp_monto",
			"pp_saldo",
			"pp_estado" 
		];
	}
}
