<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsDenunciaAccidente extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_denuncia_accidente';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'denacc_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'denacc_id','denacc_per_id','denacc_fecha_denunciaacc','denacc_lugar_accidente','denacc_fecha_accidente','denacc_ocurrio_accidente','denacc_causas_accidente','denacc_labor_accidente','denacc_atencion_accidente','denacc_estado','denacc_clase_accidente','denacc_diag_accidente','denacc_trat_accidente','denacc_testigo_primero','denacc_testigo_segundo','denacc_ubicacion_verdadera','denacc_as_id','denacc_estado_tramite'
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
				CAST(denacc_id AS TEXT) LIKE ?  OR 
				denacc_lugar_accidente LIKE ?  OR 
				denacc_ocurrio_accidente LIKE ?  OR 
				denacc_causas_accidente LIKE ?  OR 
				denacc_labor_accidente LIKE ?  OR 
				denacc_atencion_accidente LIKE ?  OR 
				denacc_estado LIKE ?  OR 
				denacc_diag_accidente LIKE ?  OR 
				denacc_trat_accidente LIKE ?  OR 
				denacc_testigo_primero LIKE ?  OR 
				denacc_testigo_segundo LIKE ?  OR 
				denacc_ubicacion_verdadera LIKE ?  OR 
				denacc_estado_tramite LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"denacc_id",
			"denacc_per_id",
			"denacc_fecha_denunciaacc",
			"denacc_lugar_accidente",
			"denacc_fecha_accidente",
			"denacc_ocurrio_accidente",
			"denacc_causas_accidente",
			"denacc_labor_accidente",
			"denacc_atencion_accidente",
			"denacc_estado",
			"denacc_clase_accidente",
			"denacc_diag_accidente",
			"denacc_trat_accidente",
			"denacc_testigo_primero",
			"denacc_testigo_segundo",
			"denacc_ubicacion_verdadera",
			"denacc_as_id",
			"denacc_estado_tramite" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"denacc_id",
			"denacc_per_id",
			"denacc_fecha_denunciaacc",
			"denacc_lugar_accidente",
			"denacc_fecha_accidente",
			"denacc_ocurrio_accidente",
			"denacc_causas_accidente",
			"denacc_labor_accidente",
			"denacc_atencion_accidente",
			"denacc_estado",
			"denacc_clase_accidente",
			"denacc_diag_accidente",
			"denacc_trat_accidente",
			"denacc_testigo_primero",
			"denacc_testigo_segundo",
			"denacc_ubicacion_verdadera",
			"denacc_as_id",
			"denacc_estado_tramite" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"denacc_id",
			"denacc_per_id",
			"denacc_fecha_denunciaacc",
			"denacc_lugar_accidente",
			"denacc_fecha_accidente",
			"denacc_ocurrio_accidente",
			"denacc_causas_accidente",
			"denacc_labor_accidente",
			"denacc_atencion_accidente",
			"denacc_estado",
			"denacc_clase_accidente",
			"denacc_diag_accidente",
			"denacc_trat_accidente",
			"denacc_testigo_primero",
			"denacc_testigo_segundo",
			"denacc_ubicacion_verdadera",
			"denacc_as_id",
			"denacc_estado_tramite" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"denacc_id",
			"denacc_per_id",
			"denacc_fecha_denunciaacc",
			"denacc_lugar_accidente",
			"denacc_fecha_accidente",
			"denacc_ocurrio_accidente",
			"denacc_causas_accidente",
			"denacc_labor_accidente",
			"denacc_atencion_accidente",
			"denacc_estado",
			"denacc_clase_accidente",
			"denacc_diag_accidente",
			"denacc_trat_accidente",
			"denacc_testigo_primero",
			"denacc_testigo_segundo",
			"denacc_ubicacion_verdadera",
			"denacc_as_id",
			"denacc_estado_tramite" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"denacc_id",
			"denacc_per_id",
			"denacc_fecha_denunciaacc",
			"denacc_lugar_accidente",
			"denacc_fecha_accidente",
			"denacc_ocurrio_accidente",
			"denacc_causas_accidente",
			"denacc_labor_accidente",
			"denacc_atencion_accidente",
			"denacc_estado",
			"denacc_clase_accidente",
			"denacc_diag_accidente",
			"denacc_trat_accidente",
			"denacc_testigo_primero",
			"denacc_testigo_segundo",
			"denacc_ubicacion_verdadera",
			"denacc_as_id",
			"denacc_estado_tramite" 
		];
	}
}
