<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TblKdRequisito extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'tbl_kd_requisito';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'rq_id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'rq_id','rq_descripcion','rq_estado','rq_usuario_creacion','rq_fecha_creacion','rq_categoria'
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
				CAST(rq_id AS TEXT) LIKE ?  OR 
				rq_descripcion LIKE ?  OR 
				rq_estado LIKE ?  OR 
				rq_categoria LIKE ? 
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
			"rq_id",
			"rq_descripcion",
			"rq_estado",
			"rq_usuario_creacion",
			"rq_fecha_creacion",
			"rq_categoria" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"rq_id",
			"rq_descripcion",
			"rq_estado",
			"rq_usuario_creacion",
			"rq_fecha_creacion",
			"rq_categoria" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"rq_id",
			"rq_descripcion",
			"rq_estado",
			"rq_usuario_creacion",
			"rq_fecha_creacion",
			"rq_categoria" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"rq_id",
			"rq_descripcion",
			"rq_estado",
			"rq_usuario_creacion",
			"rq_fecha_creacion",
			"rq_categoria" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"rq_id",
			"rq_descripcion",
			"rq_estado",
			"rq_usuario_creacion",
			"rq_fecha_creacion",
			"rq_categoria" 
		];
	}
}
