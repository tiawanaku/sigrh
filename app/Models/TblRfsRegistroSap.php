<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblRfsRegistroSap extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_rfs_registro_sap';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'rs_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'rs_id','rs_per_id','rs_ca_num_item','rs_ca_id_actual','rs_pu_id_actual','rs_eo_id_actual','rs_eo_descripcion_actual','rs_eo_destino','rs_eo_descripcion_destino','rs_ca_id_destino','rs_pu_id_destino','rs_justificacion_tecnica','rs_objetivo_propuesto','rs_formacion','rs_rc_id','rs_nro_informe_tecnico','rs_nro_informe_legal','rs_cp_da','rs_cp_ue','rs_fecha_registro','rs_fecha_modificacion','rs_usuario_registro','rs_valida_destino','rs_ratifica_origen','rs_cp_ue_destino','rs_estado'
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
				CAST(rs_id AS TEXT) LIKE ?  OR 
				rs_eo_descripcion_actual LIKE ?  OR 
				rs_eo_destino LIKE ?  OR 
				rs_eo_descripcion_destino LIKE ?  OR 
				rs_justificacion_tecnica LIKE ?  OR 
				rs_objetivo_propuesto LIKE ?  OR 
				rs_formacion LIKE ?  OR 
				rs_nro_informe_tecnico LIKE ?  OR 
				rs_nro_informe_legal LIKE ?  OR 
				rs_valida_destino LIKE ?  OR 
				rs_ratifica_origen LIKE ?  OR 
				rs_estado LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"rs_id",
			"rs_per_id",
			"rs_ca_num_item",
			"rs_ca_id_actual",
			"rs_pu_id_actual",
			"rs_eo_id_actual",
			"rs_eo_descripcion_actual",
			"rs_eo_destino",
			"rs_eo_descripcion_destino",
			"rs_ca_id_destino",
			"rs_pu_id_destino",
			"rs_justificacion_tecnica",
			"rs_objetivo_propuesto",
			"rs_formacion",
			"rs_rc_id",
			"rs_nro_informe_tecnico",
			"rs_nro_informe_legal",
			"rs_cp_da",
			"rs_cp_ue",
			"rs_fecha_registro",
			"rs_fecha_modificacion",
			"rs_usuario_registro",
			"rs_valida_destino",
			"rs_ratifica_origen",
			"rs_cp_da_destino",
			"rs_cp_ue_destino",
			"rs_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"rs_id",
			"rs_per_id",
			"rs_ca_num_item",
			"rs_ca_id_actual",
			"rs_pu_id_actual",
			"rs_eo_id_actual",
			"rs_eo_descripcion_actual",
			"rs_eo_destino",
			"rs_eo_descripcion_destino",
			"rs_ca_id_destino",
			"rs_pu_id_destino",
			"rs_justificacion_tecnica",
			"rs_objetivo_propuesto",
			"rs_formacion",
			"rs_rc_id",
			"rs_nro_informe_tecnico",
			"rs_nro_informe_legal",
			"rs_cp_da",
			"rs_cp_ue",
			"rs_fecha_registro",
			"rs_fecha_modificacion",
			"rs_usuario_registro",
			"rs_valida_destino",
			"rs_ratifica_origen",
			"rs_cp_da_destino",
			"rs_cp_ue_destino",
			"rs_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"rs_id",
			"rs_per_id",
			"rs_ca_num_item",
			"rs_ca_id_actual",
			"rs_pu_id_actual",
			"rs_eo_id_actual",
			"rs_eo_descripcion_actual",
			"rs_eo_destino",
			"rs_eo_descripcion_destino",
			"rs_ca_id_destino",
			"rs_pu_id_destino",
			"rs_justificacion_tecnica",
			"rs_objetivo_propuesto",
			"rs_formacion",
			"rs_rc_id",
			"rs_nro_informe_tecnico",
			"rs_nro_informe_legal",
			"rs_cp_da",
			"rs_cp_ue",
			"rs_fecha_registro",
			"rs_fecha_modificacion",
			"rs_usuario_registro",
			"rs_valida_destino",
			"rs_ratifica_origen",
			"rs_cp_da_destino",
			"rs_cp_ue_destino",
			"rs_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"rs_id",
			"rs_per_id",
			"rs_ca_num_item",
			"rs_ca_id_actual",
			"rs_pu_id_actual",
			"rs_eo_id_actual",
			"rs_eo_descripcion_actual",
			"rs_eo_destino",
			"rs_eo_descripcion_destino",
			"rs_ca_id_destino",
			"rs_pu_id_destino",
			"rs_justificacion_tecnica",
			"rs_objetivo_propuesto",
			"rs_formacion",
			"rs_rc_id",
			"rs_nro_informe_tecnico",
			"rs_nro_informe_legal",
			"rs_cp_da",
			"rs_cp_ue",
			"rs_fecha_registro",
			"rs_fecha_modificacion",
			"rs_usuario_registro",
			"rs_valida_destino",
			"rs_ratifica_origen",
			"rs_cp_da_destino",
			"rs_cp_ue_destino",
			"rs_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"rs_id",
			"rs_per_id",
			"rs_ca_num_item",
			"rs_ca_id_actual",
			"rs_pu_id_actual",
			"rs_eo_id_actual",
			"rs_eo_descripcion_actual",
			"rs_eo_destino",
			"rs_eo_descripcion_destino",
			"rs_ca_id_destino",
			"rs_pu_id_destino",
			"rs_justificacion_tecnica",
			"rs_objetivo_propuesto",
			"rs_formacion",
			"rs_rc_id",
			"rs_nro_informe_tecnico",
			"rs_nro_informe_legal",
			"rs_cp_da",
			"rs_cp_ue",
			"rs_fecha_registro",
			"rs_fecha_modificacion",
			"rs_usuario_registro",
			"rs_valida_destino",
			"rs_ratifica_origen",
			"rs_cp_ue_destino",
			"rs_estado" 
		];
	}
}
