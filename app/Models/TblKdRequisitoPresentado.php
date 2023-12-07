<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblKdRequisitoPresentado extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_kd_requisito_presentado';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'rp_id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'rp_valor_pk','rp_nombre_pk','rp_fecha_presentacion','rp_estado','rp_usuario_creacion','rp_fecha_creacion','rp_respuesta'
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
				CAST(rp_id AS TEXT) LIKE ?  OR 
				rp_nombre_pk LIKE ?  OR 
				rp_estado LIKE ?  OR 
				rp_respuesta LIKE ? 
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
			"rp_id",
			"rp_valor_pk",
			"rp_nombre_pk",
			"rp_fecha_presentacion",
			"rp_estado",
			"rp_usuario_creacion",
			"rp_fecha_creacion",
			"rp_respuesta" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"rp_id",
			"rp_valor_pk",
			"rp_nombre_pk",
			"rp_fecha_presentacion",
			"rp_estado",
			"rp_usuario_creacion",
			"rp_fecha_creacion",
			"rp_respuesta" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"rp_id",
			"rp_valor_pk",
			"rp_nombre_pk",
			"rp_fecha_presentacion",
			"rp_estado",
			"rp_usuario_creacion",
			"rp_fecha_creacion",
			"rp_respuesta" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"rp_id",
			"rp_valor_pk",
			"rp_nombre_pk",
			"rp_fecha_presentacion",
			"rp_estado",
			"rp_usuario_creacion",
			"rp_fecha_creacion",
			"rp_respuesta" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"rp_id",
			"rp_valor_pk",
			"rp_nombre_pk",
			"rp_fecha_presentacion",
			"rp_estado",
			"rp_usuario_creacion",
			"rp_fecha_creacion",
			"rp_respuesta" 
		];
	}
}
