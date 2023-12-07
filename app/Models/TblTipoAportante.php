<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblTipoAportante extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_tipo_aportante';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ta_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ta_id','ta_lab_cotizacion_mensual','ta_lab_prima_riesgo_comun','ta_lab_comision_afp','ta_lab_solidario','ta_pat_prima_riesgo_prof','ta_pat_solidario','ta_pat_caja','ta_pat_provivienda','ta_descripcion','ta_estado'
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
				CAST(ta_id AS TEXT) LIKE ?  OR 
				ta_descripcion LIKE ?  OR 
				ta_estado LIKE ? 
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
			"ta_id",
			"ta_lab_cotizacion_mensual",
			"ta_lab_prima_riesgo_comun",
			"ta_lab_comision_afp",
			"ta_lab_solidario",
			"ta_pat_prima_riesgo_prof",
			"ta_pat_solidario",
			"ta_pat_caja",
			"ta_pat_provivienda",
			"ta_descripcion",
			"ta_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ta_id",
			"ta_lab_cotizacion_mensual",
			"ta_lab_prima_riesgo_comun",
			"ta_lab_comision_afp",
			"ta_lab_solidario",
			"ta_pat_prima_riesgo_prof",
			"ta_pat_solidario",
			"ta_pat_caja",
			"ta_pat_provivienda",
			"ta_descripcion",
			"ta_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ta_id",
			"ta_lab_cotizacion_mensual",
			"ta_lab_prima_riesgo_comun",
			"ta_lab_comision_afp",
			"ta_lab_solidario",
			"ta_pat_prima_riesgo_prof",
			"ta_pat_solidario",
			"ta_pat_caja",
			"ta_pat_provivienda",
			"ta_descripcion",
			"ta_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ta_id",
			"ta_lab_cotizacion_mensual",
			"ta_lab_prima_riesgo_comun",
			"ta_lab_comision_afp",
			"ta_lab_solidario",
			"ta_pat_prima_riesgo_prof",
			"ta_pat_solidario",
			"ta_pat_caja",
			"ta_pat_provivienda",
			"ta_descripcion",
			"ta_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ta_id",
			"ta_lab_cotizacion_mensual",
			"ta_lab_prima_riesgo_comun",
			"ta_lab_comision_afp",
			"ta_lab_solidario",
			"ta_pat_prima_riesgo_prof",
			"ta_pat_solidario",
			"ta_pat_caja",
			"ta_pat_provivienda",
			"ta_descripcion",
			"ta_estado" 
		];
	}
}
