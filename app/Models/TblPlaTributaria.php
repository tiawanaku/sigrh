<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblPlaTributaria extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_pla_tributaria';
	

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
		'trb_per_id','trb_pc_id','trb_prefijo','trb_monto_neto_j','trb_2min_no_imponible_k','trb_base_imponible_l','trb_impuesto_rciva_m','trb_2min_13porciento_n','trb_impuesto_neto_o','trb_form110_presentado_p','trb_saldo_favor_fisco_q','trb_saldo_favor_dependiente_r','trb_saldo_favor_dependiente_ant_s','trb_mantenimiento_de_valor_t','trb_saldo_favor_dependiente_ant_actualizado_u','trb_saldo_utilizado_v','trb_impuesto_retenido_w','trb_saldo_favor_dependiente_nuevo_x','trb_tr_id_p','trb_tr_id_s','trb_estado'
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
				CAST(trb_per_id AS TEXT) LIKE ?  OR 
				trb_prefijo LIKE ?  OR 
				trb_estado LIKE ? 
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
			"trb_per_id",
			"trb_pc_id",
			"trb_prefijo",
			"trb_monto_neto_j",
			"trb_2min_no_imponible_k",
			"trb_base_imponible_l",
			"trb_impuesto_rciva_m",
			"trb_2min_13porciento_n",
			"trb_impuesto_neto_o",
			"trb_form110_presentado_p",
			"trb_saldo_favor_fisco_q",
			"trb_saldo_favor_dependiente_r",
			"trb_saldo_favor_dependiente_ant_s",
			"trb_mantenimiento_de_valor_t",
			"trb_saldo_favor_dependiente_ant_actualizado_u",
			"trb_saldo_utilizado_v",
			"trb_impuesto_retenido_w",
			"trb_saldo_favor_dependiente_nuevo_x",
			"trb_tr_id_p",
			"trb_tr_id_s",
			"trb_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"trb_per_id",
			"trb_pc_id",
			"trb_prefijo",
			"trb_monto_neto_j",
			"trb_2min_no_imponible_k",
			"trb_base_imponible_l",
			"trb_impuesto_rciva_m",
			"trb_2min_13porciento_n",
			"trb_impuesto_neto_o",
			"trb_form110_presentado_p",
			"trb_saldo_favor_fisco_q",
			"trb_saldo_favor_dependiente_r",
			"trb_saldo_favor_dependiente_ant_s",
			"trb_mantenimiento_de_valor_t",
			"trb_saldo_favor_dependiente_ant_actualizado_u",
			"trb_saldo_utilizado_v",
			"trb_impuesto_retenido_w",
			"trb_saldo_favor_dependiente_nuevo_x",
			"trb_tr_id_p",
			"trb_tr_id_s",
			"trb_estado" 
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
