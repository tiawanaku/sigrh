<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblSalDevolucionSanciones extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_sal_devolucion_sanciones';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'dev_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'dev_id','dev_per_id','dev_cod_proceso','dev_cod_cargo','dev_secuencial','dev_tipo_fun','dev_prefijo','dev_tipo_aportante','dev_beneficiario','dev_cod_sancion','dev_dias_sancion','dev_dias_devolucion','dev_motivo_devolucion','dev_tipo_doc','dev_num_doc','dev_estado','dev_fecha_registro','dev_usuario_registro','dev_fecha_salarios','dev_usuario_planilla','dev_nro_planilla','dev_nro_planilla_salarios','dev_basico'
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
				CAST(dev_id AS TEXT) LIKE ?  OR 
				dev_tipo_fun LIKE ?  OR 
				dev_prefijo LIKE ?  OR 
				dev_beneficiario LIKE ?  OR 
				dev_motivo_devolucion LIKE ?  OR 
				dev_tipo_doc LIKE ?  OR 
				dev_num_doc LIKE ?  OR 
				dev_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"dev_id",
			"dev_per_id",
			"dev_cod_proceso",
			"dev_cod_cargo",
			"dev_secuencial",
			"dev_tipo_fun",
			"dev_prefijo",
			"dev_tipo_aportante",
			"dev_beneficiario",
			"dev_cod_sancion",
			"dev_dias_sancion",
			"dev_dias_devolucion",
			"dev_motivo_devolucion",
			"dev_tipo_doc",
			"dev_num_doc",
			"dev_estado",
			"dev_fecha_registro",
			"dev_usuario_registro",
			"dev_fecha_salarios",
			"dev_usuario_planilla",
			"dev_nro_planilla",
			"dev_nro_planilla_salarios",
			"dev_basico" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"dev_id",
			"dev_per_id",
			"dev_cod_proceso",
			"dev_cod_cargo",
			"dev_secuencial",
			"dev_tipo_fun",
			"dev_prefijo",
			"dev_tipo_aportante",
			"dev_beneficiario",
			"dev_cod_sancion",
			"dev_dias_sancion",
			"dev_dias_devolucion",
			"dev_motivo_devolucion",
			"dev_tipo_doc",
			"dev_num_doc",
			"dev_estado",
			"dev_fecha_registro",
			"dev_usuario_registro",
			"dev_fecha_salarios",
			"dev_usuario_planilla",
			"dev_nro_planilla",
			"dev_nro_planilla_salarios",
			"dev_basico" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"dev_id",
			"dev_per_id",
			"dev_cod_proceso",
			"dev_cod_cargo",
			"dev_secuencial",
			"dev_tipo_fun",
			"dev_prefijo",
			"dev_tipo_aportante",
			"dev_beneficiario",
			"dev_cod_sancion",
			"dev_dias_sancion",
			"dev_dias_devolucion",
			"dev_motivo_devolucion",
			"dev_tipo_doc",
			"dev_num_doc",
			"dev_estado",
			"dev_fecha_registro",
			"dev_usuario_registro",
			"dev_fecha_salarios",
			"dev_usuario_planilla",
			"dev_nro_planilla",
			"dev_nro_planilla_salarios",
			"dev_basico" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"dev_id",
			"dev_per_id",
			"dev_cod_proceso",
			"dev_cod_cargo",
			"dev_secuencial",
			"dev_tipo_fun",
			"dev_prefijo",
			"dev_tipo_aportante",
			"dev_beneficiario",
			"dev_cod_sancion",
			"dev_dias_sancion",
			"dev_dias_devolucion",
			"dev_motivo_devolucion",
			"dev_tipo_doc",
			"dev_num_doc",
			"dev_estado",
			"dev_fecha_registro",
			"dev_usuario_registro",
			"dev_fecha_salarios",
			"dev_usuario_planilla",
			"dev_nro_planilla",
			"dev_nro_planilla_salarios",
			"dev_basico" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"dev_id",
			"dev_per_id",
			"dev_cod_proceso",
			"dev_cod_cargo",
			"dev_secuencial",
			"dev_tipo_fun",
			"dev_prefijo",
			"dev_tipo_aportante",
			"dev_beneficiario",
			"dev_cod_sancion",
			"dev_dias_sancion",
			"dev_dias_devolucion",
			"dev_motivo_devolucion",
			"dev_tipo_doc",
			"dev_num_doc",
			"dev_estado",
			"dev_fecha_registro",
			"dev_usuario_registro",
			"dev_fecha_salarios",
			"dev_usuario_planilla",
			"dev_nro_planilla",
			"dev_nro_planilla_salarios",
			"dev_basico" 
		];
	}
}
