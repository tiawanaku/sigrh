<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsSeguimientoAccidente extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_seguimiento_accidente';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'sa_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'sa_id','sa_denacc_id','sa_seguimiento','sa_observacionesgravedad','sa_total_dias_baja_medica','sa_estado','sa_fecha_segaccidente','sa_marcar_accidente','sa_clasif_it'
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
				CAST(sa_id AS TEXT) LIKE ?  OR 
				sa_seguimiento LIKE ?  OR 
				sa_observacionesgravedad LIKE ?  OR 
				sa_estado LIKE ?  OR 
				sa_clasif_it LIKE ? 
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
			"sa_id",
			"sa_denacc_id",
			"sa_seguimiento",
			"sa_observacionesgravedad",
			"sa_total_dias_baja_medica",
			"sa_estado",
			"sa_fecha_segaccidente",
			"sa_marcar_accidente",
			"sa_clasif_it" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"sa_id",
			"sa_denacc_id",
			"sa_seguimiento",
			"sa_observacionesgravedad",
			"sa_total_dias_baja_medica",
			"sa_estado",
			"sa_fecha_segaccidente",
			"sa_marcar_accidente",
			"sa_clasif_it" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"sa_id",
			"sa_denacc_id",
			"sa_seguimiento",
			"sa_observacionesgravedad",
			"sa_total_dias_baja_medica",
			"sa_estado",
			"sa_fecha_segaccidente",
			"sa_marcar_accidente",
			"sa_clasif_it" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"sa_id",
			"sa_denacc_id",
			"sa_seguimiento",
			"sa_observacionesgravedad",
			"sa_total_dias_baja_medica",
			"sa_estado",
			"sa_fecha_segaccidente",
			"sa_marcar_accidente",
			"sa_clasif_it" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"sa_id",
			"sa_denacc_id",
			"sa_seguimiento",
			"sa_observacionesgravedad",
			"sa_total_dias_baja_medica",
			"sa_estado",
			"sa_fecha_segaccidente",
			"sa_marcar_accidente",
			"sa_clasif_it" 
		];
	}
}
