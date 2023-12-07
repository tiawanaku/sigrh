<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsAsignacionBeneficio extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_asignacion_beneficio';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ab_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'ab_aeb_id','ab_fa_id','ab_fecha_inicio','ab_fecha_fin','ab_estado','ab_tipo_beneficiario'
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
				CAST(ab_id AS TEXT) LIKE ?  OR 
				ab_estado LIKE ?  OR 
				ab_tipo_beneficiario LIKE ? 
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
			"ab_id",
			"ab_aeb_id",
			"ab_fa_id",
			"ab_fecha_inicio",
			"ab_fecha_fin",
			"ab_estado",
			"ab_tipo_beneficiario" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ab_id",
			"ab_aeb_id",
			"ab_fa_id",
			"ab_fecha_inicio",
			"ab_fecha_fin",
			"ab_estado",
			"ab_tipo_beneficiario" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ab_id",
			"ab_aeb_id",
			"ab_fa_id",
			"ab_fecha_inicio",
			"ab_fecha_fin",
			"ab_estado",
			"ab_tipo_beneficiario" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ab_id",
			"ab_aeb_id",
			"ab_fa_id",
			"ab_fecha_inicio",
			"ab_fecha_fin",
			"ab_estado",
			"ab_tipo_beneficiario" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ab_id",
			"ab_aeb_id",
			"ab_fa_id",
			"ab_fecha_inicio",
			"ab_fecha_fin",
			"ab_estado",
			"ab_tipo_beneficiario" 
		];
	}
}
