<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsAfiliacionEgs extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_afiliacion_egs';
	

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
		'ae_id','ae_per_id','ae_as_id','ae_egs_id','ae_estado','ae_fecha_form','ae_policlinico','ae_fecha_baja_form','ae_fecha_baja_elab','ae_tipo_ingreso','ae_tipo_proceso_baja','ae_em_id'
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
				CAST(ae_id AS TEXT) LIKE ?  OR 
				ae_estado LIKE ?  OR 
				ae_tipo_ingreso LIKE ?  OR 
				ae_tipo_proceso_baja LIKE ? 
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
			"ae_id",
			"ae_per_id",
			"ae_as_id",
			"ae_egs_id",
			"ae_estado",
			"ae_fecha_form",
			"ae_policlinico",
			"ae_fecha_baja_form",
			"ae_fecha_baja_elab",
			"ae_tipo_ingreso",
			"ae_tipo_proceso_baja",
			"ae_em_id" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ae_id",
			"ae_per_id",
			"ae_as_id",
			"ae_egs_id",
			"ae_estado",
			"ae_fecha_form",
			"ae_policlinico",
			"ae_fecha_baja_form",
			"ae_fecha_baja_elab",
			"ae_tipo_ingreso",
			"ae_tipo_proceso_baja",
			"ae_em_id" 
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
