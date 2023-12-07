<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblBsAfp extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_bs_afp';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'afp_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'afp_per_id','afp_previsora','afp_nua','afp_fecha_filiacion','afp_fecha_modificacion','afp_motivo_modificacion','afp_fecha_registro','afp_estado_carnet','afp_fecha_carnet','afp_usuario','afp_estado'
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
				CAST(afp_id AS TEXT) LIKE ?  OR 
				afp_previsora LIKE ?  OR 
				afp_nua LIKE ?  OR 
				afp_motivo_modificacion LIKE ?  OR 
				afp_estado_carnet LIKE ?  OR 
				afp_estado LIKE ? 
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
			"afp_id",
			"afp_per_id",
			"afp_previsora",
			"afp_nua",
			"afp_fecha_filiacion",
			"afp_fecha_modificacion",
			"afp_motivo_modificacion",
			"afp_fecha_registro",
			"afp_estado_carnet",
			"afp_fecha_carnet",
			"afp_usuario",
			"afp_estado" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"afp_id",
			"afp_per_id",
			"afp_previsora",
			"afp_nua",
			"afp_fecha_filiacion",
			"afp_fecha_modificacion",
			"afp_motivo_modificacion",
			"afp_fecha_registro",
			"afp_estado_carnet",
			"afp_fecha_carnet",
			"afp_usuario",
			"afp_estado" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"afp_id",
			"afp_per_id",
			"afp_previsora",
			"afp_nua",
			"afp_fecha_filiacion",
			"afp_fecha_modificacion",
			"afp_motivo_modificacion",
			"afp_fecha_registro",
			"afp_estado_carnet",
			"afp_fecha_carnet",
			"afp_usuario",
			"afp_estado" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"afp_id",
			"afp_per_id",
			"afp_previsora",
			"afp_nua",
			"afp_fecha_filiacion",
			"afp_fecha_modificacion",
			"afp_motivo_modificacion",
			"afp_fecha_registro",
			"afp_estado_carnet",
			"afp_fecha_carnet",
			"afp_usuario",
			"afp_estado" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"afp_id",
			"afp_per_id",
			"afp_previsora",
			"afp_nua",
			"afp_fecha_filiacion",
			"afp_fecha_modificacion",
			"afp_motivo_modificacion",
			"afp_fecha_registro",
			"afp_estado_carnet",
			"afp_fecha_carnet",
			"afp_usuario",
			"afp_estado" 
		];
	}
}
